<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\MyListRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=MyListRepository::class)
 */
class MyList
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $listItem;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $listScr;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getListItem(): ?string
    {
        return $this->listItem;
    }

    public function setListItem(string $listItem): self
    {
        $this->listItem = $listItem;

        return $this;
    }

    public function getListScr(): ?string
    {
        return $this->listScr;
    }

    public function setListScr(string $listScr): self
    {
        $this->listScr = $listScr;

        return $this;
    }
}
