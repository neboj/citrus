<?php
declare(strict_types=1);

namespace Comment\Entity;

use Comment\Entity\Status\StatusInterface;

class Comment implements CommentInterface
{
    /**
     * @var string
     */
    private $content;
    /**
     * @var string
     */
    private $username;
    /**
     * @var string
     */
    private $email;

    /**
     * @var StatusInterface
     */
    private $statusEntity;
    /**
     * @var int
     */
    private $id;

    public function __construct(string $username, string $email, string $content, StatusInterface $statusEntity, int $id)
    {
        $this->username = $username;
        $this->email = $email;
        $this->content = $content;
        $this->statusEntity = $statusEntity;
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return StatusInterface
     */
    public function getStatusEntity(): StatusInterface
    {
        return $this->statusEntity;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

}