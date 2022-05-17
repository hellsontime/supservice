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
    #[ORM\ManyToOne(targetEntity: Ticket::class, inversedBy: "message")]
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
    private int $message_id;

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
    public function getMessageId(): int
    {
        return $this->message_id;
    }

    /**
     * @param int $message_id
     */
    public function setMessageId(int $message_id): void
    {
        $this->message_id = $message_id;
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
            "message_id" => $this->getMessageId(),
            "ticket_id" => $this->getTicketId(),
            "sender_user_id" => $this->getSenderUserId(),
            "content" => $this->getContent(),
        ];
    }
}