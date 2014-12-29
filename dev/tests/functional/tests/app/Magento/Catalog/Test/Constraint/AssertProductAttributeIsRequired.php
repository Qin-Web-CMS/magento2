<?php
/**
 * @copyright Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 */

namespace Magento\Catalog\Test\Constraint;

use Magento\Catalog\Test\Fixture\CatalogProductAttribute;
use Magento\Catalog\Test\Page\Adminhtml\CatalogProductEdit;
use Magento\Catalog\Test\Page\Adminhtml\CatalogProductIndex;
use Mtf\Constraint\AbstractConstraint;
use Mtf\Fixture\InjectableFixture;

/**
 * Check whether the attribute is mandatory.
 */
class AssertProductAttributeIsRequired extends AbstractConstraint
{
    /* tags */
    const SEVERITY = 'low';
    /* end tags */

    /**
     * Expected message.
     */
    const REQUIRE_MESSAGE = 'This is a required field.';

    /**
     * Check whether the attribute is mandatory.
     *
     * @param CatalogProductIndex $catalogProductIndex
     * @param CatalogProductEdit $catalogProductEdit
     * @param CatalogProductAttribute $attribute
     * @param InjectableFixture $product
     * @return void
     */
    public function processAssert(
        CatalogProductIndex $catalogProductIndex,
        CatalogProductEdit $catalogProductEdit,
        CatalogProductAttribute $attribute,
        InjectableFixture $product
    ) {
        $catalogProductIndex->open()->getProductGrid()->searchAndOpen(['sku' => $product->getSku()]);
        $productForm = $catalogProductEdit->getProductForm();
        $productForm->getAttributeElement($attribute)->setValue('');
        $catalogProductEdit->getFormPageActions()->save();
        $failedAttributes = $productForm->getRequireNoticeAttributes($product);
        $actualMessage = $failedAttributes['product-details'][$attribute->getFrontendLabel()];

        \PHPUnit_Framework_Assert::assertEquals(
            self::REQUIRE_MESSAGE,
            $actualMessage,
            'JS error notice on product edit page is not equal to expected.'
        );
    }

    /**
     * Return string representation of object.
     *
     * @return string
     */
    public function toString()
    {
        return '"This is a required field" notice is visible on product edit page after trying to save product with '
        . 'blank required field.';
    }
}
