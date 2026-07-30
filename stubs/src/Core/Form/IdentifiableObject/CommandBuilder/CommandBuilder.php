<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\CommandBuilder;

/**
 * This class is inspired from the PropertyAccessor component from Symfony, but it's centered around preparing CQRS
 * command objects based on a config and the data available in the flattened form data array. The component is based on
 * a configuration which allows it to prefill a command, this reduces the size of code used since all array checking and
 * setters calling are performed by the component itself.
 *
 * For example instead of doing:
 *
 *     $modificationDetected = false;
 *     $command = new CQRSCommand();
 *     if (isset($data['number'])) {
 *         $modificationDetected = true;
 *         $command->setNumber((int) $data['number']);
 *     }
 *     if (!empty($data['author']['name'])) {
 *         $modificationDetected = true;
 *         $command->setAuthorName($data['author']['name']);
 *     }
 *     if (!empty($data['isValid'])) {
 *         $modificationDetected = true;
 *         $command->setRedirectOption(
 *             $data['seo']['redirect_option']['type'],
 *             $data['seo']['redirect_option']['target']['id'] ?? 0
 *         );
 *     }
 *
 *     return $modificationDetected ? [$command] : [];
 *
 * You can do instead:
 *
 *     $config = new CommandBuilderConfig();
 *     $config
 *         ->addField('[number]', 'setNumber', DataField::TYPE_INT)
 *         ->addField('[author][name]', 'setAuthorName', DataField::TYPE_STRING)
 *         ->addCompoundField('setRedirectOption', [
 *             '[seo][redirect_option][type]' => DataField::TYPE_STRING,
 *             '[seo][redirect_option][target][id]' => [
 *                 'type' => DataField::TYPE_INT,
 *                 'default' => 0,
 *             ],
 *         ])
 *     ;
 *     $builder = new CommandBuilder($config);
 *
 *     return $builder->buildCommands($data, new CQRSCommand());
 *
 * The code is cleaner, and you can focus on your data format instead of some trivial checking. When dealing with multi
 * shop commands it becomes even more interesting.
 */
class CommandBuilder
{
    /**
     * @param CommandBuilderConfig $config contains all the configuration of the fields that need to be handled by the
     *                                     builder along with the multishop prefix, if needed
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Form\IdentifiableObject\CommandBuilder\CommandBuilderConfig $config)
    {
    }
    /**
     * This method prepares CQRS commands, based on the configuration (set in the constructor) and the provided data
     * (which is likely coming from a form or any other input).
     *
     * It can be used for two use cases:
     *
     * - Fill a single command: this is the most common use case, in this case only the single shop command parameter
     * is required, the builder will search for matching values in the flattened array input data, and fill them using
     * the appropriate setters of the command. The command is fully filled and returned via an array (which will contain
     * only one command naturally), only when a modification has been detected though.
     *
     * - Fill a single command AND an all shops command: in this particular use case you need to specify two input
     * commands as parameters. The builder performs the same research of command fields in the input array. However, in
     * this case it will check if the data was set to be modified for ALL the shops (not just a single one). To do this
     * it checks the data for a boolean value which key matches the command field:
     *
     *      ex:
     *          The price is modified for all shops
     *          ['price' => 15.45, 'modify_all_price' => true]
     *
     *          The price is modified for all shops, but the tax for a single shop only
     *          ['price' => 15.45, 'tax_rate' => 0.2, 'modify_all_price' => true]
     *
     * This indicates the target of this modification (the prefix can be configured). Depending on the target, the
     * accessor will choose to fill either the single shop command OR the all shops command. Finally, it returns an
     * array of either one, two or zero commands depending on the modifications that have been detected or not (the
     * single shop command is always returned before the all shops one though).
     *
     * @param array $data
     * @param object $singleShopCommand
     * @param object|null $allShopsCommand
     *
     * @return array Returns prepared commands (if no updated field was detected an empty array is returned)
     */
    public function buildCommands(array $data, object $singleShopCommand, object $allShopsCommand = null): array
    {
    }
}
