<?php declare(strict_types=1);

namespace Shopware\Api\Tax\Collection;

use Shopware\Api\Shop\Collection\ShopBasicCollection;
use Shopware\Api\Tax\Struct\TaxAreaRuleTranslationDetailStruct;

class TaxAreaRuleTranslationDetailCollection extends TaxAreaRuleTranslationBasicCollection
{
    /**
     * @var TaxAreaRuleTranslationDetailStruct[]
     */
    protected $elements = [];

    public function getTaxAreaRules(): TaxAreaRuleBasicCollection
    {
        return new TaxAreaRuleBasicCollection(
            $this->fmap(function (TaxAreaRuleTranslationDetailStruct $taxAreaRuleTranslation) {
                return $taxAreaRuleTranslation->getTaxAreaRule();
            })
        );
    }

    public function getLanguages(): ShopBasicCollection
    {
        return new ShopBasicCollection(
            $this->fmap(function (TaxAreaRuleTranslationDetailStruct $taxAreaRuleTranslation) {
                return $taxAreaRuleTranslation->getLanguage();
            })
        );
    }

    protected function getExpectedClass(): string
    {
        return TaxAreaRuleTranslationDetailStruct::class;
    }
}