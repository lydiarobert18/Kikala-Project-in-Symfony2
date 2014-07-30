<?php

namespace Xiaomei\XiaomeiBundle\Entity;

use Doctrine\ORM\EntityRepository;
use \Datetime;

/**
 * CoursRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */

class CoursRepository extends EntityRepository
{
	// public function findHomeContents(){

	// 	$query = $this->getEntityManager()->createQuery('
	// 		SELECT cou, cat FROM XiaomeiXiaomeiBundle:Cours cou 
	// 		LEFT JOIN cou.category cat ');
 //         //order by limit by 
	// 	$contents = $query->getResult();

	// 	return $contents;
	// 	}

	public function findHomeContents($tri,$page){

		//$tri="c.nrPlaceReste"
		//$tri='c.categorie.name'
		//$tri='c.lieu'
		$offset=($page-1)*5;

		//utiliser formulaire get pour obtenir le valeur de $tri: 
        $datecours=new Datetime();
		$query = $this->createQueryBuilder('c')
				->select('c, cat,user')	//hyper facile à oublier
				//->where('c.dateCours >= :dateCours')	
				//->andWhere('c.isannulation' =:isannulation')					    
			    ->leftJoin('c.category', 'cat')	
			    ->leftJoin('c.user', 'user')
			   //  ->setParameter('dateCours', NOW())
			   // ->setParameter('isannulation', false)
			    ->orderBy($tri,'DESC')
			    //LIMIT $offset;			    
			     ->setMaxResults(5)
                ->setFirstResult($offset)
	       	    ->getQuery();
       
		$contents = $query->getResult();

		return $contents;
		}





	public function findHomeContents_essai($tri,$page,$lieu,$duration,$category){
	  $offset=($page-1)*5;

      $query = $this->createQueryBuilder('c')

				->select('c, cat,user')
				->where('c.isannulation =:isannulation');

				if($lieu!=="all"){
				$query->andWhere('c.lieu = :lieu')
				->setParameter('lieu', $lieu);
			     }

			     if($duration!=='all'){
				$query->andWhere('c.duration < :duration')
				->setParameter('duration', $duration);
			     }

			     if($category!=='1'){
				$query->andWhere('cat.id=:category')
				->setParameter('category', $category);
			     }

			    $query->leftJoin('c.category', 'cat')	
			          ->leftJoin('c.user', 'user')
			  
			    ->setParameter('isannulation', false)

			    ->orderBy($tri,'DESC')
			     ->setMaxResults(5)
                ->setFirstResult($offset)
	       	   ;
       
		$contents = $query->getQuery() ->getResult();

		return $contents;

	}



	public function countcourspage($lieu,$duration,$category){

			$query = $this->createQueryBuilder('c')
				->select( "COUNT ( c)"	)
				->where('c.isannulation =:isannulation');

				if($lieu!=="all"){
				$query->andWhere('c.lieu = :lieu')
				->setParameter('lieu', $lieu);
			     }

			     if($duration!=='all'){
				$query->andWhere('c.duration < :duration')
				->setParameter('duration', $duration);
			     }

			     if($category!=='1'){
				$query->andWhere('cat.id=:category')
				->setParameter('category', $category);
			     }

			    $query->leftJoin('c.category', 'cat')	
			          //->leftJoin('c.user', 'user')
			  
			    ->setParameter('isannulation', false)
	       	   ;
       
		$count = $query->getQuery() ->getResult();
       
		return $count;

		}


  /*public function countcourspage(){

			$query = $this->createQueryBuilder('c')
				->select( "COUNT ( c)"	)//hyper facile à oublier
				//->where('c.dateCours >= :dateCours')	
				//->andWhere('c.isannulation' =:isannulation')					    
		 
	       	    ->getQuery();
       
		$count = $query->getResult();
       
		return $count;

		}*/
		

    public function cours_rec_afficher($arraycoursid){
           $query = $this->createQueryBuilder('c')            
          ->select("c")
           ->where('c.id in (:arraycoursid)')
           ->setParameter(':arraycoursid', $arraycoursid)
          ->getQuery();

   $cours_rec_resulats = $query->getResult();
       
    return $cours_rec_resulats;

    }


	public function findFullSingleContent($id){

		$query = $this->createQueryBuilder('c')
				->select('c, cat,user,inscription')	//hyper facile à oublier
			    ->where('c.id = :id')
			    ->leftJoin('c.category', 'cat')
			    ->leftJoin('c.user', 'user')
			    ->leftJoin('c.inscription', 'inscription')		
			    ->setParameter('id', $id)
			    ->getQuery();

		$content = $query->getSingleResult();
       
		return $content;
	}

	public function findcount(){
          $query = $this->createQueryBuilder('i')
				->select( "COUNT ( i)"	)
				->getQuery();
				$nombrecours = $query->getSingleResult();
       
		return $nombrecours;
    }



  }  

 