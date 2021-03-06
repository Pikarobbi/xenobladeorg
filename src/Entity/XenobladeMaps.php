<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;

/**
 * XenobladeMaps
 *
 * @ORM\Table(name="xenoblade_maps")
 * @ORM\Entity
 */
class XenobladeMaps
{
    /**
     * @var int
     *
     * @ORM\Column(name="maid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $maid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var XenobladeChapters|null
     *
     * @ORM\ManyToOne(targetEntity="XenobladeChapters")
     * @ORM\JoinColumn(name="cid", referencedColumnName="cid")
     */
    private $chapter;

    /**
     * @var int
     *
     * @ORM\Column(name="prio", type="integer", nullable=false)
     */
    private $prio;

    /**
     * @var string
     *
     * @ORM\Column(name="imgsrc", type="string", length=255, nullable=false)
     */
    private $imgsrc;

    /**
     * @var int
     *
     * @ORM\Column(name="width", type="integer", nullable=false)
     */
    private $width;

    /**
     * @var int
     *
     * @ORM\Column(name="height", type="integer", nullable=false)
     */
    private $height;

    /**
     * @var string
     *
     * @ORM\Column(name="thumb", type="string", length=255, nullable=false)
     */
    private $thumb;

    /**
     * @var XenobladeMapinfos[]
     * @OneToMany(targetEntity="XenobladeMapinfos", mappedBy="map")
     */
    private $mapInfos;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    public function __construct() {
        $this->mapInfos = new ArrayCollection();
    }

    public function getMaid(): ?int
    {
        return $this->maid;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getChapter(): ?XenobladeChapters
    {
        return $this->chapter;
    }

    public function setChapter(XenobladeChapters $chapter): self
    {
        $this->chapter = $chapter;

        return $this;
    }

    public function getPrio(): ?int
    {
        return $this->prio;
    }

    public function setPrio(int $prio): self
    {
        $this->prio = $prio;

        return $this;
    }

    public function getImgsrc(): ?string
    {
        return $this->imgsrc;
    }

    public function setImgsrc(string $imgsrc): self
    {
        $this->imgsrc = $imgsrc;

        return $this;
    }

    public function getWidth(): ?int
    {
        return $this->width;
    }

    public function setWidth(int $width): self
    {
        $this->width = $width;

        return $this;
    }

    public function getHeight(): ?int
    {
        return $this->height;
    }

    public function setHeight(int $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getThumb(): ?string
    {
        return $this->thumb;
    }

    public function setThumb(string $thumb): self
    {
        $this->thumb = $thumb;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getMapInfos(): array
    {
        return $this->mapInfos->toArray();
    }
}
