<?php

namespace PrestaShop\PrestaShop\Core\ExtraProperty\Form;

/**
 * The single authority on the form options an extra property definition may declare for its
 * back-office field.
 *
 * A definition's formType/formOptions are rendered, unchanged, inside the entity forms every
 * employee opens (product, customer, order…), and the field type is deliberately free: modules
 * ship rich custom types and even core types such as TextPreviewType are legitimately useful.
 * What must stay out of a definition author's hands are the OPTIONS that make any type
 * dangerous. They fall in two groups:
 *
 *  - options whose VALUE is displayed — rendered raw or purified by the UI-kit theme
 *    (label_subtitle, hint, alert_*), interpolated as a tag name (label_tag_name), used as a
 *    link target (download_url, external_link) — are ALLOWED, with their content checked: plain
 *    display text (no "<", no control character, see ExtraPropertyValidator::isSafeDisplayText()),
 *    an enumerated value, or an http(s)/root-relative URL. Every attribute NAME of an attr bag is
 *    echoed verbatim, so "on*", inline style and URL attributes are stripped from every bag;
 *  - options that change what the field DOES — switch a value or label to raw rendering
 *    (allow_html, label_html), select which Twig blocks render it (block_prefix, form_theme),
 *    change what it maps to or how it validates (mapped, data, constraints, property_path…), or
 *    take callables and class names (choice_loader, entry_type, class…) — are DENIED by name:
 *    no content check can make them safe.
 *
 * Everything else — including the options a custom type defines for itself — passes, and a
 * definition is refused on write when the resulting field does not build (FormOptionsValidator),
 * or its field is dropped on read when it does not build (ExtraPropertiesFormBuilderModifier).
 *
 * The rules are enforced at BOTH ends from this one class, so they can never drift apart:
 *  - FormOptionsValidator (write, i.e. ExtraPropertyRegistry::register()) refuses a definition
 *    with an explicit error naming each refused option — the author learns immediately why the
 *    input is not accepted;
 *  - ExtraPropertiesFormBuilderModifier (read, i.e. at render) drops the very same options and
 *    logs them — a row written straight into the registry table cannot render what a
 *    registration would have refused.
 *
 * Static-only, like ExtraPropertyConstraintGrammar: a vocabulary, not a service.
 */
class ExtraPropertyFormOptionsPolicy
{
    /**
     * Options a definition may never set through form_options, whatever the form type: each one
     * changes what the field DOES, so no content check applies. Grouped by the reason it is denied.
     *
     * The policy only filters what a definition passes through form_options. A CUSTOM form type
     * is free to use any of these internally — it sets them in its own configureOptions() or
     * buildForm(), from module code the shop already trusts, and this policy never sees them.
     * That is the intended way to get, for instance, a collection of sub-fields: wrap a
     * CollectionType in a custom type that configures entry_type / allow_add / prototype itself,
     * declare that type as the definition's formType, and pair it with a JSON-typed property
     * (the writer json-encodes the submitted array, the reader decodes it).
     *
     * @var list<string>
     */
    public const DENIED_OPTIONS = [
        // Switch the stored VALUE (allow_html on TextPreviewType) or the label/help to raw HTML
        // rendering. The danger is in the text they would render unescaped, not in the option.
        'allow_html',
        'help_html',
        'label_html',
        // Select which Twig block or theme renders the field: a block that outputs raw could be picked.
        'block_name',
        'block_prefix',
        'form_theme',
        'use_default_themes',
        // Set by the modifier itself from the definition — label/help from its translatable
        // wording, required from isRequired(), data from the stored value, constraints from the
        // DSL. An override through form_options would bypass the definition.
        'constraints',
        'data',
        'help',
        'label',
        'required',
        // Change WHAT the field reads from and writes to. With mapped: true and a property_path,
        // the extra value would be written onto the HOST entity (mass assignment through the
        // product or customer form); getter/setter are callables, data_class loads a class.
        'by_reference',
        'compound',
        'data_class',
        'default_empty_data',
        'empty_data',
        'getter',
        'inherit_data',
        'mapped',
        'property_path',
        'setter',
        // Change how the field validates and where its errors land (validation_groups also
        // accepts a callable).
        'error_bubbling',
        'error_mapping',
        'validation_groups',
        // Substituted into the displayed label/help/attribute texts without any check.
        'attr_translation_parameters',
        'help_translation_parameters',
        'label_translation_parameters',
        // PrestaShop extensions that act beyond the field: write the value to every shop, bind
        // the field to a configuration key, or substitute the displayed/stored value when empty.
        'disabled_value',
        'empty_view_data',
        'modify_all_shops',
        'multistore_configuration_key',
        'multistore_dropdown',
        // Take a callable, a property path, a class name or a loader object, executed or loaded
        // while the field is built (ChoiceType and EntityType options).
        'choice_attr',
        'choice_filter',
        'choice_label',
        'choice_loader',
        'choice_name',
        'choice_value',
        'class',
        'em',
        'group_by',
        'query_builder',
        // CollectionType wiring: nested fields built from options (entry_type is a class name,
        // entry_options a full option set). Not available to a definition directly — see the
        // custom-type alternative in the docblock above.
        'allow_add',
        'allow_delete',
        'delete_empty',
        'entry_options',
        'entry_type',
        'prototype',
        'prototype_data',
        'prototype_name',
        'prototype_options',
        // Form-level options, meaningless on a field.
        'action',
        'csrf_field_name',
        'csrf_protection',
        'csrf_token_id',
        'method',
    ];
    /**
     * Attribute names refused inside every "attr" bag (attr, label_attr, row_attr, help_attr…),
     * on top of every "on*" event handler: inline CSS and URL-bearing attributes.
     *
     * @var list<string>
     */
    public const DENIED_ATTRIBUTES = ['action', 'formaction', 'href', 'ping', 'src', 'srcdoc', 'style', 'xlink:href'];
    /**
     * Options whose string value is displayed (rendered raw or purified by the theme): allowed as
     * plain display text.
     *
     * @var list<string>
     */
    public const TEXT_OPTIONS = ['alert_title', 'hint', 'label_help_box', 'label_subtitle', 'label_tab'];
    /**
     * Options carrying a list of displayed strings: allowed as lists of plain display texts
     * (alert_message also accepts a single string).
     *
     * @var list<string>
     */
    public const TEXT_LIST_OPTIONS = ['alert_message', 'data_list'];
    /**
     * Options used as a link target: allowed as an http(s) URL or a root-relative path.
     *
     * @var list<string>
     */
    public const URL_OPTIONS = ['download_url'];
    /**
     * Write-side check: every reason the options are refused, as human-readable messages naming
     * the offending option so the author can fix the definition. Empty when accepted.
     *
     * @param array<string, mixed>|null $formOptions
     *
     * @return list<string>
     */
    public static function validate(?array $formOptions): array
    {
    }
    /**
     * Read-side counterpart of validate(), built on the very same walk: the options with every
     * refused entry removed, plus the list of what was removed (for logging). Options that
     * validate() accepts come back untouched.
     *
     * @param array<string, mixed>|null $formOptions
     *
     * @return array{options: array<string, mixed>, dropped: list<string>}
     */
    public static function sanitize(?array $formOptions): array
    {
    }
}
