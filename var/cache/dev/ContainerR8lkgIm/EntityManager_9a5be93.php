<?php

namespace ContainerR8lkgIm;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0b0d0 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb486d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties67063 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, 'getConnection', array(), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        return $this->valueHolder0b0d0->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, 'getMetadataFactory', array(), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        return $this->valueHolder0b0d0->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, 'getExpressionBuilder', array(), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        return $this->valueHolder0b0d0->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, 'beginTransaction', array(), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        return $this->valueHolder0b0d0->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, 'getCache', array(), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        return $this->valueHolder0b0d0->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, 'transactional', array('func' => $func), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        return $this->valueHolder0b0d0->transactional($func);
    }

    public function commit()
    {
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, 'commit', array(), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        return $this->valueHolder0b0d0->commit();
    }

    public function rollback()
    {
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, 'rollback', array(), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        return $this->valueHolder0b0d0->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, 'getClassMetadata', array('className' => $className), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        return $this->valueHolder0b0d0->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, 'createQuery', array('dql' => $dql), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        return $this->valueHolder0b0d0->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, 'createNamedQuery', array('name' => $name), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        return $this->valueHolder0b0d0->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        return $this->valueHolder0b0d0->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        return $this->valueHolder0b0d0->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, 'createQueryBuilder', array(), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        return $this->valueHolder0b0d0->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, 'flush', array('entity' => $entity), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        return $this->valueHolder0b0d0->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        return $this->valueHolder0b0d0->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        return $this->valueHolder0b0d0->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        return $this->valueHolder0b0d0->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, 'clear', array('entityName' => $entityName), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        return $this->valueHolder0b0d0->clear($entityName);
    }

    public function close()
    {
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, 'close', array(), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        return $this->valueHolder0b0d0->close();
    }

    public function persist($entity)
    {
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, 'persist', array('entity' => $entity), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        return $this->valueHolder0b0d0->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, 'remove', array('entity' => $entity), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        return $this->valueHolder0b0d0->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, 'refresh', array('entity' => $entity), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        return $this->valueHolder0b0d0->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, 'detach', array('entity' => $entity), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        return $this->valueHolder0b0d0->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, 'merge', array('entity' => $entity), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        return $this->valueHolder0b0d0->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        return $this->valueHolder0b0d0->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        return $this->valueHolder0b0d0->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        return $this->valueHolder0b0d0->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, 'contains', array('entity' => $entity), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        return $this->valueHolder0b0d0->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, 'getEventManager', array(), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        return $this->valueHolder0b0d0->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, 'getConfiguration', array(), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        return $this->valueHolder0b0d0->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, 'isOpen', array(), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        return $this->valueHolder0b0d0->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, 'getUnitOfWork', array(), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        return $this->valueHolder0b0d0->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        return $this->valueHolder0b0d0->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        return $this->valueHolder0b0d0->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, 'getProxyFactory', array(), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        return $this->valueHolder0b0d0->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, 'initializeObject', array('obj' => $obj), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        return $this->valueHolder0b0d0->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, 'getFilters', array(), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        return $this->valueHolder0b0d0->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, 'isFiltersStateClean', array(), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        return $this->valueHolder0b0d0->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, 'hasFilters', array(), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        return $this->valueHolder0b0d0->hasFilters();
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

        $instance->initializerb486d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0b0d0) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0b0d0 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0b0d0->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, '__get', ['name' => $name], $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        if (isset(self::$publicProperties67063[$name])) {
            return $this->valueHolder0b0d0->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0b0d0;

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

        $targetObject = $this->valueHolder0b0d0;
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
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0b0d0;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0b0d0;
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
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, '__isset', array('name' => $name), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0b0d0;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0b0d0;
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
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, '__unset', array('name' => $name), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0b0d0;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0b0d0;
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
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, '__clone', array(), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        $this->valueHolder0b0d0 = clone $this->valueHolder0b0d0;
    }

    public function __sleep()
    {
        $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, '__sleep', array(), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;

        return array('valueHolder0b0d0');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb486d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb486d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb486d && ($this->initializerb486d->__invoke($valueHolder0b0d0, $this, 'initializeProxy', array(), $this->initializerb486d) || 1) && $this->valueHolder0b0d0 = $valueHolder0b0d0;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0b0d0;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0b0d0;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
