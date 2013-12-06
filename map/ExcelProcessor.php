<?php

require_once(__DIR__. '/../vendor/autoload.php');

class ExcelProcessor
{
	public function process() {
	    $ep = new PHPExcel();
	    $inputFileName = __DIR__ . '/storage/piader.xls';
	    /**  Identify the type of $inputFileName  **/
	    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
	    /**  Create a new Reader of the type that has been identified  **/
	    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
	    /**  Load $inputFileName to a PHPExcel Object  **/
	    $objPHPExcel = $objReader->load($inputFileName);
	    $worksheetNames = $objReader->listWorksheetNames($inputFileName);
	    $worksheetData = $objReader->listWorksheetInfo($inputFileName);
	    foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
		    echo 'Worksheet - ' , $worksheet->getTitle() , PHP_EOL;
		    $this->processStake($worksheet);
            $this->processZone($worksheet);
//		    foreach ($worksheet->getRowIterator() as $row) {
//			    echo '    Row number - ' , $row->getRowIndex() , PHP_EOL;
//			    $cellIterator = $row->getCellIterator();
//			    $cellIterator->setIterateOnlyExistingCells(true); // Loop all cells, even if it is not set
//			    foreach ($cellIterator as $cell) {
//				    if (!is_null($cell)) {
//					    echo '        Cell - ' , $cell->getCoordinate() , ' - ' , $cell->getCalculatedValue() , PHP_EOL;
//				    }
//			    }
//		    }
	    }
	    die();
    }	

    protected function processZone($worksheet) {
        if ('ZON' !== $worksheet->getTitle()) return;
        Db::getInstance()->truncate('excel_zone');
        foreach ($worksheet->getRowIterator() as $row) {
            $rowArray = [];
            $cellIterator = $row->getCellIterator();
            $cellIterator->setIterateOnlyExistingCells(true);
            foreach ($cellIterator as $cell) {
                if ($cell->getRow() <4) continue;
                if(!is_null($cell)) {
                    $rowArray[$cell->getColumn()] = $cell->getCalculatedValue();
                }
            }
            if(!empty($rowArray['D']) && !empty($rowArray['E'])) {
                $zone = new Zone();

                $zone->name = $rowArray['A'];
                $zone->country = $rowArray['B']; 
                $zone->type = $rowArray['C'];
                $zone->long = $rowArray['E'];
                $zone->latt = $rowArray['D'];
                $zone->locality = $rowArray['F'];
                $zone->area = $rowArray['G'];
                $zone->companies = $rowArray['H'];
                $zone->employees = $rowArray['I'];
                $zone->price_local_curr = $rowArray['J'];
                $zone->price_eur = $rowArray['K'];
                $zone->municipal_local_curr = $rowArray['L'];
                $zone->municipal_eur = $rowArray['M'];
                $zone->notes = $rowArray['N'];
                $zone->payment_plans = $rowArray['O'];
                $zone->project_documents = $rowArray['P'];
                $zone->allocation = $rowArray['Q'];
                $zone->roads = $rowArray['E'];
                $zone->water = $rowArray['S'];
                $zone->sewers = $rowArray['T'];
                $zone->gas = $rowArray['U'];
                $zone->electricity = $rowArray['V'];
                $zone->phone = $rowArray['W'];
                $zone->broadband = $rowArray['X'];

                Db::getInstance()->saveZone($zone);
            }
        }
    }

	protected function processstake($worksheet) {
		if ('stake' !== $worksheet->gettitle()) return;
		db::getinstance()->truncate('excel_stake');			
		foreach ($worksheet->getrowiterator() as $row) {
			$rowArray = [];
			$cellIterator = $row->getCellIterator();
			$cellIterator->setIterateOnlyExistingCells(false);
			foreach ($cellIterator as $cell) {
				if ($cell->getRow() <4) continue;
				if(!is_null($cell)) {
					$rowArray[$cell->getColumn()] = $cell->getCalculatedValue();
				}
			}
				 
			if(!empty($rowArray['H']) && !empty($rowArray['I'])) {
				$stake = new Stake();
				$stake->name = $rowArray['B'];
				$stake->country = $rowArray['C'];
				$stake->authority = $rowArray['D'];
				$stake->type = $rowArray['E'];
				$stake->profile = $rowArray['F'];
				$stake->activities = $rowArray['G'];
				$stake->long = $rowArray['H'];
				$stake->latt = $rowArray['I'];
				$stake->director = $rowArray['J'];
				$stake->contact_name = $rowArray['K'];
				$stake->contact_role = $rowArray['L'];
				$stake->contact_address = $rowArray['M'];
				$stake->contact_phone = $rowArray['N'];
				$stake->contact_mail = $rowArray['O'];
				$stake->description = $rowArray['P'];
				$stake->notes = $rowArray['Q'];
				Db::getInstance()->saveStake($stake);
			}
		}
	}
}
