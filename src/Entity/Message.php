<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="message")
 * @ORM\HasLifecycleCallbacks()
 */
class Message implements \JsonSerializable
{
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Ticket", inversedBy="messages")
     */
    private $ticket;

    /**
     * @return Ticket|null
     */
    public function getTicket(): ?Ticket
    {
        return $this->ticket;
    }

    /**
     * @param mixed $ticket
     */
    public function setTicket(?Ticket $ticket): self
    {
        $this->ticket = $ticket;

        return $this;
    }

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private int $id;

    /**
     * @ORM\Column(type="integer")
     */
    private int $ticket_id;

    /**
     * @ORM\Column(type="integer")
     */
    private int $sender_user_id;

    /**
     * @ORM\Column(type="text")
     */
    private string $content;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getTicketId(): int
    {
        return $this->ticket_id;
    }

    /**
     * @param int $ticket_id
     */
    public function setTicketId(int $ticket_id): void
    {
        $this->ticket_id = $ticket_id;
    }

    /**
     * @return int
     */
    public function getSenderUserId(): int
    {
        return $this->sender_user_id;
    }

    /**
     * @param int $sender_user_id
     */
    public function setSenderUserId(int $sender_user_id): void
    {
        $this->sender_user_id = $sender_user_id;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function jsonSerialize()
    {
        return [
            "id" => $this->getId(),
            "ticket_id" => $this->getTicketId(),
            "sender_user_id" => $this->getSenderUserId(),
            "content" => $this->getContent(),
        ];
    }
}