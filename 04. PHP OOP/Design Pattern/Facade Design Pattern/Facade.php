<?php

    class Facade{
		
		public function findApartments($place, $divId){
			
			$appfinder = new ApartmentFinder();
			$geolocator = new Geolocator();
			$gmap = new GoogleMap();
			
			$apartments = $appfinder->locateApartments($place);
			foreach($apartments as $apartment){
				
				$location[] = $geolocator->getLocation($apartment);
			}
			
			$gmap->initialize();
			$gmap->drawLocation($locations);
			$gmap->dispach($divId);
		}
		
	}

?>