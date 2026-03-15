<?php

namespace PrestaShopBundle\Command;

/**
 * This script will update the tax rule groups for virtual products from all EU localization packs.
 * All it needs is that the correct tax in each localization pack is marked with `eu-tax-group="virtual"`.
 **.
 *
 * 1)
 *  Parse all files under /localization,
 *  looking for <tax> elements that have the attribute eu-tax-group="virtual".
 *
 *  Store the list of files (`$euLocalizationFiles`) where such taxes have been found,
 *  in a next step we'll store the new tax group in each of them.
 *
 * 2)
 * Remove all taxRulesGroup's that have the attribute eu-tax-group="virtual".
 *
 * 3)
 * Build a new taxRulesGroup containing all the taxes found in the first step.
 *
 * 4)
 * Inject the new taxRulesGroup into all packs of `$euLocalizationFiles`, not forgetting
 * to also inject the required taxes.
 *
 * Warning: do not duplicate the tax with attribute eu-tax-group="virtual" of the pack being updated.
 *
 * Mark the injected group with the attributes eu-tax-group="virtual" and auto-generated="1"
 * Mark the injected taxes witth the attributes from-eu-tax-group="virtual" and auto-generated="1"
 *
 * Clean things up by removing all the previous taxes that had the attributes eu-tax-group="virtual" and auto-generated="1"
 */
class UpdateEUTaxruleGroupsCommand extends \Symfony\Component\Console\Command\Command
{
    public function __construct(string $localizationPath)
    {
    }
    protected function configure()
    {
    }
    public function execute(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
    }
    protected function addTax(\SimpleXMLElement $taxes, \SimpleXMLElement $tax, array $attributesToUpdate = [], array $attributesToRemove = [])
    {
    }
    protected function addTaxRule(\SimpleXMLElement $taxRulesGroup, \SimpleXMLElement $tax, $iso_code_country)
    {
    }
}
