<?php
/**
 * Created by PhpStorm.
 * User: murat
 * Date: 08.07.17
 * Time: 15:42
 */

namespace Tests;


use Symfony\Component\HttpFoundation\Session\SessionBagInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Session\Storage\MetadataBag;

class MockSessionHandler implements SessionInterface
{

    static protected $session;


    public function __construct()
    {
        self::$session = [];
    }

    /**
     * Starts the session storage.
     *
     * @return bool True if session started
     *
     * @throws \RuntimeException If session fails to start.
     */
    public function start(): bool
    {
        return true;
    }

    /**
     * Returns the session ID.
     *
     * @return string The session ID
     */
    public function getId(): string
    {
        if(array_key_exists('sessionId', self::$session)) {
            return self::$session['sessionId'];
        }
        return self::$session['sessionId'] = uniqid('mockSessionId', true);
    }

    /**
     * Checks if an attribute is defined.
     *
     * @param string $name The attribute name
     *
     * @return bool true if the attribute is defined, false otherwise
     */
    public function has($name): bool
    {
        return array_key_exists($name, self::$session);
    }

    /**
     * Returns an attribute.
     *
     * @param string $name The attribute name
     * @param mixed $default The default value if not found
     *
     * @return mixed
     */
    public function get($name, $default = null)
    {
        return array_key_exists($name, self::$session) ? self::$session[$name] : $default;
    }

    /**
     * Sets an attribute.
     *
     * @param string $name
     * @param mixed $value
     */
    public function set($name, $value)
    {
        self::$session[$name] = $value;
    }

    /**
     * Returns attributes.
     *
     * @return array Attributes
     */
    public function all(): array
    {
        return self::$session;
    }

    /**
     * Removes an attribute.
     *
     * @param string $name
     *
     * @return mixed The removed value or null when it does not exist
     */
    public function remove($name)
    {
        $value = $this->get($name);
        unset(self::$session[$name]);
        return $value;
    }

    /**
     * Clears all attributes.
     */
    public function clear()
    {
        self::$session = [];
    }

    /**
     * Sets the session ID.
     *
     * @param string $id
     */
    public function setId($id)
    {
        // TODO: Implement setId() method.
    }

    /**
     * Returns the session name.
     *
     * @return mixed The session name
     */
    public function getName()
    {
        // TODO: Implement getName() method.
    }

    /**
     * Sets the session name.
     *
     * @param string $name
     */
    public function setName($name)
    {
        // TODO: Implement setName() method.
    }

    /**
     * Invalidates the current session.
     *
     * Clears all session attributes and flashes and regenerates the
     * session and deletes the old session from persistence.
     *
     * @param int $lifetime Sets the cookie lifetime for the session cookie. A null value
     *                      will leave the system settings unchanged, 0 sets the cookie
     *                      to expire with browser session. Time is in seconds, and is
     *                      not a Unix timestamp.
     *
     * @return bool True if session invalidated, false if error
     */
    public function invalidate($lifetime = null)
    {
        // TODO: Implement invalidate() method.
    }

    /**
     * Migrates the current session to a new session id while maintaining all
     * session attributes.
     *
     * @param bool $destroy Whether to delete the old session or leave it to garbage collection
     * @param int $lifetime Sets the cookie lifetime for the session cookie. A null value
     *                       will leave the system settings unchanged, 0 sets the cookie
     *                       to expire with browser session. Time is in seconds, and is
     *                       not a Unix timestamp.
     *
     * @return bool True if session migrated, false if error
     */
    public function migrate($destroy = false, $lifetime = null)
    {
        // TODO: Implement migrate() method.
    }

    /**
     * Force the session to be saved and closed.
     *
     * This method is generally not required for real sessions as
     * the session will be automatically saved at the end of
     * code execution.
     */
    public function save()
    {
        // TODO: Implement save() method.
    }

    /**
     * Sets attributes.
     *
     * @param array $attributes Attributes
     */
    public function replace(array $attributes)
    {
        // TODO: Implement replace() method.
    }

    /**
     * Checks if the session was started.
     *
     * @return bool
     */
    public function isStarted()
    {
        // TODO: Implement isStarted() method.
    }

    /**
     * Registers a SessionBagInterface with the session.
     *
     * @param SessionBagInterface $bag
     */
    public function registerBag(SessionBagInterface $bag)
    {
        // TODO: Implement registerBag() method.
    }

    /**
     * Gets a bag instance by name.
     *
     * @param string $name
     *
     * @return SessionBagInterface
     */
    public function getBag($name)
    {
        // TODO: Implement getBag() method.
    }

    /**
     * Gets session meta.
     *
     * @return MetadataBag
     */
    public function getMetadataBag()
    {
        // TODO: Implement getMetadataBag() method.
    }
}