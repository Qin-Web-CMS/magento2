<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Sales\Api\Data;

/**
 * Shipment item interface.
 *
 * A shipment is a delivery package that contains products. A shipment document accompanies the shipment. This
 * document lists the products and their quantities in the delivery package. A product is an item in a shipment.
 * @api
 */
interface ShipmentItemInterface extends \Magento\Framework\Api\ExtensibleDataInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    /*
     * Entity ID.
     */
    const ENTITY_ID = 'entity_id';
    /*
     * Parent ID.
     */
    const PARENT_ID = 'parent_id';
    /*
     * Row total.
     */
    const ROW_TOTAL = 'row_total';
    /*
     * Price.
     */
    const PRICE = 'price';
    /*
     * Weight.
     */
    const WEIGHT = 'weight';
    /*
     * Quantity.
     */
    const QTY = 'qty';
    /*
     * Product ID.
     */
    const PRODUCT_ID = 'product_id';
    /*
     * Order item ID.
     */
    const ORDER_ITEM_ID = 'order_item_id';
    /*
     * Additional data.
     */
    const ADDITIONAL_DATA = 'additional_data';
    /*
     * Description.
     */
    const DESCRIPTION = 'description';
    /*
     * Name.
     */
    const NAME = 'name';
    /*
     * SKU.
     */
    const SKU = 'sku';

    /**
     * Gets the additional data for the shipment item.
     *
     * @return string|null Additional data.
     */
    public function getAdditionalData();

    /**
     * Gets the description for the shipment item.
     *
     * @return string|null Description.
     */
    public function getDescription();

    /**
     * Gets the ID for the shipment item.
     *
     * @return int|null Shipment item ID.
     */
    public function getEntityId();

    /**
     * Sets entity ID.
     *
     * @param int|null $entityId
     * @return $this
     */
    public function setEntityId($entityId);

    /**
     * Gets the name for the shipment item.
     *
     * @return string|null Name.
     */
    public function getName();

    /**
     * Gets the order item ID for the shipment item.
     *
     * @return int Order item ID.
     */
    public function getOrderItemId();

    /**
     * Gets the parent ID for the shipment item.
     *
     * @return int|null Parent ID.
     */
    public function getParentId();

    /**
     * Gets the price for the shipment item.
     *
     * @return float|null Price.
     */
    public function getPrice();

    /**
     * Gets the product ID for the shipment item.
     *
     * @return int|null Product ID.
     */
    public function getProductId();

    /**
     * Gets the quantity for the shipment item.
     *
     * @return float Quantity.
     */
    public function getQty();

    /**
     * Gets the row total for the shipment item.
     *
     * @return float|null Row total.
     */
    public function getRowTotal();

    /**
     * Gets the SKU for the shipment item.
     *
     * @return string|null SKU.
     */
    public function getSku();

    /**
     * Gets the weight for the shipment item.
     *
     * @return float|null Weight.
     */
    public function getWeight();

    /**
     * Sets the parent ID for the shipment item.
     *
     * @param int|null $id
     * @return $this
     */
    public function setParentId($id);

    /**
     * Sets the row total for the shipment item.
     *
     * @param float|null $amount
     * @return $this
     */
    public function setRowTotal($amount);

    /**
     * Sets the price for the shipment item.
     *
     * @param float|null $price
     * @return $this
     */
    public function setPrice($price);

    /**
     * Sets the weight for the shipment item.
     *
     * @param float|null $weight
     * @return $this
     */
    public function setWeight($weight);

    /**
     * Sets the quantity for the shipment item.
     *
     * @param float $qty
     * @return $this
     */
    public function setQty($qty);

    /**
     * Sets the product ID for the shipment item.
     *
     * @param int|null $id
     * @return $this
     */
    public function setProductId($id);

    /**
     * Sets the order item ID for the shipment item.
     *
     * @param int $id
     * @return $this
     */
    public function setOrderItemId($id);

    /**
     * Sets the additional data for the shipment item.
     *
     * @param string|null $additionalData
     * @return $this
     */
    public function setAdditionalData($additionalData);

    /**
     * Sets the description for the shipment item.
     *
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description);

    /**
     * Sets the name for the shipment item.
     *
     * @param string|null $name
     * @return $this
     */
    public function setName($name);

    /**
     * Sets the SKU for the shipment item.
     *
     * @param string|null $sku
     * @return $this
     */
    public function setSku($sku);

    /**
     * Retrieve existing extension attributes object or create a new one.
     *
     * @return \Magento\Sales\Api\Data\ShipmentItemExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object.
     *
     * @param \Magento\Sales\Api\Data\ShipmentItemExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(\Magento\Sales\Api\Data\ShipmentItemExtensionInterface $extensionAttributes);
}
