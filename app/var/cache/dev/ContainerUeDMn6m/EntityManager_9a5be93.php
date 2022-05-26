<?php

namespace ContainerUeDMn6m;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder83679 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7fb91 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3c30f = [
        
    ];

    public function getConnection()
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, 'getConnection', array(), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        return $this->valueHolder83679->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, 'getMetadataFactory', array(), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        return $this->valueHolder83679->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, 'getExpressionBuilder', array(), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        return $this->valueHolder83679->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, 'beginTransaction', array(), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        return $this->valueHolder83679->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, 'getCache', array(), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        return $this->valueHolder83679->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, 'transactional', array('func' => $func), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        return $this->valueHolder83679->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, 'wrapInTransaction', array('func' => $func), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        return $this->valueHolder83679->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, 'commit', array(), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        return $this->valueHolder83679->commit();
    }

    public function rollback()
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, 'rollback', array(), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        return $this->valueHolder83679->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, 'getClassMetadata', array('className' => $className), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        return $this->valueHolder83679->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, 'createQuery', array('dql' => $dql), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        return $this->valueHolder83679->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, 'createNamedQuery', array('name' => $name), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        return $this->valueHolder83679->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        return $this->valueHolder83679->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        return $this->valueHolder83679->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, 'createQueryBuilder', array(), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        return $this->valueHolder83679->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, 'flush', array('entity' => $entity), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        return $this->valueHolder83679->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        return $this->valueHolder83679->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        return $this->valueHolder83679->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        return $this->valueHolder83679->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, 'clear', array('entityName' => $entityName), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        return $this->valueHolder83679->clear($entityName);
    }

    public function close()
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, 'close', array(), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        return $this->valueHolder83679->close();
    }

    public function persist($entity)
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, 'persist', array('entity' => $entity), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        return $this->valueHolder83679->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, 'remove', array('entity' => $entity), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        return $this->valueHolder83679->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, 'refresh', array('entity' => $entity), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        return $this->valueHolder83679->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, 'detach', array('entity' => $entity), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        return $this->valueHolder83679->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, 'merge', array('entity' => $entity), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        return $this->valueHolder83679->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        return $this->valueHolder83679->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        return $this->valueHolder83679->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        return $this->valueHolder83679->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, 'contains', array('entity' => $entity), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        return $this->valueHolder83679->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, 'getEventManager', array(), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        return $this->valueHolder83679->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, 'getConfiguration', array(), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        return $this->valueHolder83679->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, 'isOpen', array(), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        return $this->valueHolder83679->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, 'getUnitOfWork', array(), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        return $this->valueHolder83679->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        return $this->valueHolder83679->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        return $this->valueHolder83679->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, 'getProxyFactory', array(), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        return $this->valueHolder83679->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, 'initializeObject', array('obj' => $obj), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        return $this->valueHolder83679->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, 'getFilters', array(), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        return $this->valueHolder83679->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, 'isFiltersStateClean', array(), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        return $this->valueHolder83679->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, 'hasFilters', array(), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        return $this->valueHolder83679->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer7fb91 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder83679) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder83679 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder83679->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, '__get', ['name' => $name], $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        if (isset(self::$publicProperties3c30f[$name])) {
            return $this->valueHolder83679->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder83679;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder83679;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder83679;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder83679;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, '__isset', array('name' => $name), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder83679;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder83679;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, '__unset', array('name' => $name), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder83679;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder83679;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, '__clone', array(), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        $this->valueHolder83679 = clone $this->valueHolder83679;
    }

    public function __sleep()
    {
        $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, '__sleep', array(), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;

        return array('valueHolder83679');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7fb91 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7fb91;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7fb91 && ($this->initializer7fb91->__invoke($valueHolder83679, $this, 'initializeProxy', array(), $this->initializer7fb91) || 1) && $this->valueHolder83679 = $valueHolder83679;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder83679;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder83679;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
