<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;

class File
{
  /**
   * @var string
   *
   * @ORM\Column(name="media", type="string", length=255, nullable=true)
   */
  protected $media;

  /**
   * @Assert\File(maxSize="6000000")
   */
  protected $file;

  public function getAbsolutePath()
  {
    return null === $this->media ? null : $this->getUploadRootDir().'/'.$this->media;
  }

  public function getWebPath()
  {
    return null === $this->media ? null : $this->getUploadDir().'/'.$this->media;
  }

  protected function getUploadRootDir()
  {
    return __DIR__.'/../../../web/'.$this->getUploadDir();
  }

  public function upload()
  {
      if (null === $this->getFile()) {
          return;
      }

      $this->getFile()->move(
          $this->getUploadRootDir(),
          $this->getFile()->getClientOriginalName()
      );

      $this->media = $this->getFile()->getClientOriginalName();

      $this->file = null;
  }

  /**
   * Get media
   *
   * @return string
   */
  public function getMedia()
  {
      return $this->media;
  }

  /**
   * Set media
   *
   * @param string $media
   *
   * @return Projet
   */
  public function setMedia($media)
  {
      $this->media = $media;

      return $this;
  }

  /**
   * Get file.
   *
   * @return UploadedFile
   */
  public function getFile()
  {
      return $this->file;
  }

  /**
   * Sets file.
   *
   * @param UploadedFile $file
   */
  public function setFile(UploadedFile $file = null)
  {
      $this->file = $file;
  }
}
