<?php

namespace Container2hQksnJ;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera5a2d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerce5c0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2fb59 = [
        
    ];

    public function getConnection()
    {
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, 'getConnection', array(), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        return $this->valueHoldera5a2d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, 'getMetadataFactory', array(), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        return $this->valueHoldera5a2d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, 'getExpressionBuilder', array(), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        return $this->valueHoldera5a2d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, 'beginTransaction', array(), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        return $this->valueHoldera5a2d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, 'getCache', array(), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        return $this->valueHoldera5a2d->getCache();
    }

    public function transactional($func)
    {
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, 'transactional', array('func' => $func), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        return $this->valueHoldera5a2d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, 'wrapInTransaction', array('func' => $func), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        return $this->valueHoldera5a2d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, 'commit', array(), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        return $this->valueHoldera5a2d->commit();
    }

    public function rollback()
    {
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, 'rollback', array(), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        return $this->valueHoldera5a2d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, 'getClassMetadata', array('className' => $className), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        return $this->valueHoldera5a2d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, 'createQuery', array('dql' => $dql), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        return $this->valueHoldera5a2d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, 'createNamedQuery', array('name' => $name), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        return $this->valueHoldera5a2d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        return $this->valueHoldera5a2d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        return $this->valueHoldera5a2d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, 'createQueryBuilder', array(), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        return $this->valueHoldera5a2d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, 'flush', array('entity' => $entity), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        return $this->valueHoldera5a2d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        return $this->valueHoldera5a2d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        return $this->valueHoldera5a2d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        return $this->valueHoldera5a2d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, 'clear', array('entityName' => $entityName), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        return $this->valueHoldera5a2d->clear($entityName);
    }

    public function close()
    {
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, 'close', array(), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        return $this->valueHoldera5a2d->close();
    }

    public function persist($entity)
    {
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, 'persist', array('entity' => $entity), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        return $this->valueHoldera5a2d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, 'remove', array('entity' => $entity), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        return $this->valueHoldera5a2d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, 'refresh', array('entity' => $entity), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        return $this->valueHoldera5a2d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, 'detach', array('entity' => $entity), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        return $this->valueHoldera5a2d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, 'merge', array('entity' => $entity), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        return $this->valueHoldera5a2d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        return $this->valueHoldera5a2d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        return $this->valueHoldera5a2d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, 'getRepository', array('entityName' => $entityName), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        return $this->valueHoldera5a2d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, 'contains', array('entity' => $entity), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        return $this->valueHoldera5a2d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, 'getEventManager', array(), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        return $this->valueHoldera5a2d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, 'getConfiguration', array(), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        return $this->valueHoldera5a2d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, 'isOpen', array(), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        return $this->valueHoldera5a2d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, 'getUnitOfWork', array(), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        return $this->valueHoldera5a2d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        return $this->valueHoldera5a2d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        return $this->valueHoldera5a2d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, 'getProxyFactory', array(), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        return $this->valueHoldera5a2d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, 'initializeObject', array('obj' => $obj), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        return $this->valueHoldera5a2d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, 'getFilters', array(), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        return $this->valueHoldera5a2d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, 'isFiltersStateClean', array(), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        return $this->valueHoldera5a2d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, 'hasFilters', array(), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        return $this->valueHoldera5a2d->hasFilters();
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

        $instance->initializerce5c0 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera5a2d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera5a2d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera5a2d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, '__get', ['name' => $name], $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        if (isset(self::$publicProperties2fb59[$name])) {
            return $this->valueHoldera5a2d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera5a2d;

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

        $targetObject = $this->valueHoldera5a2d;
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
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera5a2d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera5a2d;
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
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, '__isset', array('name' => $name), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera5a2d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera5a2d;
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
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, '__unset', array('name' => $name), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera5a2d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera5a2d;
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
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, '__clone', array(), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        $this->valueHoldera5a2d = clone $this->valueHoldera5a2d;
    }

    public function __sleep()
    {
        $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, '__sleep', array(), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;

        return array('valueHoldera5a2d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerce5c0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerce5c0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerce5c0 && ($this->initializerce5c0->__invoke($valueHoldera5a2d, $this, 'initializeProxy', array(), $this->initializerce5c0) || 1) && $this->valueHoldera5a2d = $valueHoldera5a2d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera5a2d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera5a2d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
