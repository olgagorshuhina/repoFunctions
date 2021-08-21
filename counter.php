public function getSite()
	{

		$this->HLload(self::siteHL);
        $res = $this->strEntityDataClass::getList(array(
           'select' => array('*'),
         	'order' => array('ID' => 'ASC'),
         	'filter' => array('ID' => $this->siteId),
         	'limit' => 1
        ));

	    while ($arItem = $res->fetch()) {
	        $this->siteURL = $arItem['UF_URL'];
	        $this->encode = $arItem['UF_ENCODING'];
	        $this->iblockId = $arItem['UF_IBLOCK'];
	        $this->iblockIdTP = $arItem['UF_IBLOCK_TP'];
	    }
	}
