<?php

namespace UserRbac\Entity;

use ZfcUser\Entity\UserInterface;

/**
 * Entity of table, 'user_role_linker'
 */
class UserRoleLinker implements UserRoleLinkerInterface
{
    /**
     * @var int $userId    User Id
     */
    protected $userId;

    /**
     * @var string $roleId    Role
     */
    protected $roleId;

    /**
     * {@inheritDoc}
     *
     */
    public function setUserId($userId)
    {
        $this->userId = (int) $userId;

        return $this;
    }

    /**
     * {@inheritDoc}
     *
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Sets userId
     *
     * @param UserInterface $user
     * @return self
     */
    public function setUser(UserInterface $user)
    {
        $this->setUserId($user->getId());

        return $this;
    }

    /**
     * {@inheritDoc}
     *
     */
    public function setRoleId($roleId)
    {
        $this->roleId = $roleId;

        return $this;
    }

    /**
     * {@inheritDoc}
     *
     */
    public function getRoleId()
    {
        return $this->roleId;
    }
}
