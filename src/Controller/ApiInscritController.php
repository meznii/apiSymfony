<?php

namespace App\Controller;

use App\Entity\InscritEnseignant;
use App\Entity\InscritsEtudiant;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Exception\NotEncodableValueException;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class ApiInscritController extends AbstractController
{
    #[Route('/api/inscrit/etudiant', name: 'api_inscrit', methods:['POST'])]
    public function saveEtudiant(Request $request, SerializerInterface $serializer, EntityManagerInterface $em, ValidatorInterface $validator)
    {
        
     $jsonRecu =  $request->getContent();
     try{
          $post = $serializer->deserialize($jsonRecu, InscritsEtudiant::class,'json');
        
          $errors = $validator->validate($post);
          if(count($errors) > 0){
                return $this->json($errors, 400);
            }
          $em->persist($post);
          $em->flush();
          return $this->json($post,201,[]);
        }catch(NotEncodableValueException $e){
            return $this->json([
                'status' => '400',
                'message'=> $e->getMessage()
            ], 400);
        }

        
    }

    #[Route('/api/inscrit/enseignant', name: 'api_inscrit_ens', methods:['POST'])]
    public function saveEnseignant(Request $request, SerializerInterface $serializer, EntityManagerInterface $em, ValidatorInterface $validator)
    {
        
     $jsonRecu =  $request->getContent();
     try{
          $post = $serializer->deserialize($jsonRecu, InscritEnseignant::class,'json');
        
          $errors = $validator->validate($post);
          if(count($errors) > 0){
                return $this->json($errors, 400);
            }
          $em->persist($post);
          $em->flush();
          return $this->json($post,201,[]);
        }catch(NotEncodableValueException $e){
            return $this->json([
                'status' => '400',
                'message'=> $e->getMessage()
            ], 400);
        }

        
    }
    
}
