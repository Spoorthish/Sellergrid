<?php
declare(strict_types=1);

namespace I95dev\Sellercontact\Model\ResourceModel\Sellercontact;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * @var string
     */
    protected $_idFieldName = 'id';
	protected $_previewFlag;
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            \I95dev\Sellercontact\Model\Sellercontact::class,
            \I95dev\Sellercontact\Model\ResourceModel\Sellercontact::class
        );
		$this->_map['fields']['id'] = 'main_table.id';
    }
}

