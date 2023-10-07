<?php

namespace Infrastructure\Entity;

use Doctrine\ORM\Mapping as ORM;
use Infrastructure\Repository\TestEntityRepository;

#[ORM\Entity(repositoryClass: TestEntityRepository::class)]
class TestEntity
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}
