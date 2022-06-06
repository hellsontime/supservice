<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor/autoload.php';
(require __DIR__.'/App_KernelDevDebugContainer.php')->set(\ContainerQz18ScZ\App_KernelDevDebugContainer::class, null);
require __DIR__.'/ContainerQz18ScZ/EntityManager_9a5be93.php';
require __DIR__.'/ContainerQz18ScZ/getValidator_NotCompromisedPasswordService.php';
require __DIR__.'/ContainerQz18ScZ/getValidator_ExpressionService.php';
require __DIR__.'/ContainerQz18ScZ/getValidator_EmailService.php';
require __DIR__.'/ContainerQz18ScZ/getValidator_BuilderService.php';
require __DIR__.'/ContainerQz18ScZ/getSession_FactoryService.php';
require __DIR__.'/ContainerQz18ScZ/getServicesResetterService.php';
require __DIR__.'/ContainerQz18ScZ/getSecurity_Validator_UserPasswordService.php';
require __DIR__.'/ContainerQz18ScZ/getSecurity_User_Provider_Concrete_AppUserProviderService.php';
require __DIR__.'/ContainerQz18ScZ/getSecurity_PasswordHasherFactoryService.php';
require __DIR__.'/ContainerQz18ScZ/getSecurity_Logout_Listener_CsrfTokenClearingService.php';
require __DIR__.'/ContainerQz18ScZ/getSecurity_Listener_UserProviderService.php';
require __DIR__.'/ContainerQz18ScZ/getSecurity_Listener_UserChecker_MainService.php';
require __DIR__.'/ContainerQz18ScZ/getSecurity_Listener_UserChecker_LoginService.php';
require __DIR__.'/ContainerQz18ScZ/getSecurity_Listener_UserChecker_ApiService.php';
require __DIR__.'/ContainerQz18ScZ/getSecurity_Listener_Session_MainService.php';
require __DIR__.'/ContainerQz18ScZ/getSecurity_Listener_PasswordMigratingService.php';
require __DIR__.'/ContainerQz18ScZ/getSecurity_Listener_Main_UserProviderService.php';
require __DIR__.'/ContainerQz18ScZ/getSecurity_Listener_CsrfProtectionService.php';
require __DIR__.'/ContainerQz18ScZ/getSecurity_Listener_CheckAuthenticatorCredentialsService.php';
require __DIR__.'/ContainerQz18ScZ/getSecurity_HttpUtilsService.php';
require __DIR__.'/ContainerQz18ScZ/getSecurity_Firewall_Map_Context_MainService.php';
require __DIR__.'/ContainerQz18ScZ/getSecurity_Firewall_Map_Context_LoginService.php';
require __DIR__.'/ContainerQz18ScZ/getSecurity_Firewall_Map_Context_DevService.php';
require __DIR__.'/ContainerQz18ScZ/getSecurity_Firewall_Map_Context_ApiService.php';
require __DIR__.'/ContainerQz18ScZ/getSecurity_EventDispatcher_LoginService.php';
require __DIR__.'/ContainerQz18ScZ/getSecurity_EventDispatcher_ApiService.php';
require __DIR__.'/ContainerQz18ScZ/getSecurity_Csrf_TokenStorageService.php';
require __DIR__.'/ContainerQz18ScZ/getSecurity_ChannelListenerService.php';
require __DIR__.'/ContainerQz18ScZ/getSecurity_Authenticator_Jwt_ApiService.php';
require __DIR__.'/ContainerQz18ScZ/getSecurity_Authenticator_JsonLogin_LoginService.php';
require __DIR__.'/ContainerQz18ScZ/getSecurity_AccessMapService.php';
require __DIR__.'/ContainerQz18ScZ/getSecurity_AccessListenerService.php';
require __DIR__.'/ContainerQz18ScZ/getSecrets_VaultService.php';
require __DIR__.'/ContainerQz18ScZ/getRouting_LoaderService.php';
require __DIR__.'/ContainerQz18ScZ/getLexikJwtAuthentication_KeyLoaderService.php';
require __DIR__.'/ContainerQz18ScZ/getLexikJwtAuthentication_JwtManagerService.php';
require __DIR__.'/ContainerQz18ScZ/getLexikJwtAuthentication_EncoderService.php';
require __DIR__.'/ContainerQz18ScZ/getErrorControllerService.php';
require __DIR__.'/ContainerQz18ScZ/getDoctrine_UuidGeneratorService.php';
require __DIR__.'/ContainerQz18ScZ/getDoctrine_UlidGeneratorService.php';
require __DIR__.'/ContainerQz18ScZ/getDoctrine_Orm_Validator_UniqueService.php';
require __DIR__.'/ContainerQz18ScZ/getDoctrine_Orm_Listeners_PdoCacheAdapterDoctrineSchemaSubscriberService.php';
require __DIR__.'/ContainerQz18ScZ/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService.php';
require __DIR__.'/ContainerQz18ScZ/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaSubscriberService.php';
require __DIR__.'/ContainerQz18ScZ/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerQz18ScZ/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php';
require __DIR__.'/ContainerQz18ScZ/getDoctrine_Orm_DefaultEntityManagerService.php';
require __DIR__.'/ContainerQz18ScZ/getDoctrine_Orm_DefaultAnnotationMetadataDriverService.php';
require __DIR__.'/ContainerQz18ScZ/getDoctrine_Dbal_DefaultConnectionService.php';
require __DIR__.'/ContainerQz18ScZ/getDebug_Security_Voter_VoteListenerService.php';
require __DIR__.'/ContainerQz18ScZ/getDebug_Security_Voter_Security_Access_SimpleRoleVoterService.php';
require __DIR__.'/ContainerQz18ScZ/getDebug_Security_Voter_Security_Access_AuthenticatedVoterService.php';
require __DIR__.'/ContainerQz18ScZ/getDebug_Security_UserValueResolverService.php';
require __DIR__.'/ContainerQz18ScZ/getDebug_Security_Firewall_Authenticator_MainService.php';
require __DIR__.'/ContainerQz18ScZ/getDebug_Security_Firewall_Authenticator_LoginService.php';
require __DIR__.'/ContainerQz18ScZ/getDebug_Security_Firewall_Authenticator_ApiService.php';
require __DIR__.'/ContainerQz18ScZ/getDebug_ArgumentResolver_VariadicService.php';
require __DIR__.'/ContainerQz18ScZ/getDebug_ArgumentResolver_SessionService.php';
require __DIR__.'/ContainerQz18ScZ/getDebug_ArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerQz18ScZ/getDebug_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/ContainerQz18ScZ/getDebug_ArgumentResolver_RequestService.php';
require __DIR__.'/ContainerQz18ScZ/getDebug_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/ContainerQz18ScZ/getDebug_ArgumentResolver_DefaultService.php';
require __DIR__.'/ContainerQz18ScZ/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerQz18ScZ/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerQz18ScZ/getCache_ValidatorExpressionLanguageService.php';
require __DIR__.'/ContainerQz18ScZ/getCache_SystemClearerService.php';
require __DIR__.'/ContainerQz18ScZ/getCache_SystemService.php';
require __DIR__.'/ContainerQz18ScZ/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerQz18ScZ/getCache_AppClearerService.php';
require __DIR__.'/ContainerQz18ScZ/getCache_AppService.php';
require __DIR__.'/ContainerQz18ScZ/getTemplateControllerService.php';
require __DIR__.'/ContainerQz18ScZ/getRedirectControllerService.php';
require __DIR__.'/ContainerQz18ScZ/getUpdateTicketStatusRequestService.php';
require __DIR__.'/ContainerQz18ScZ/getUpdateTicketRequestService.php';
require __DIR__.'/ContainerQz18ScZ/getUpdateTicketMessageRequestService.php';
require __DIR__.'/ContainerQz18ScZ/getStoreTicketRequestService.php';
require __DIR__.'/ContainerQz18ScZ/getStoreTicketMessageRequestService.php';
require __DIR__.'/ContainerQz18ScZ/getRegisterAuthRequestService.php';
require __DIR__.'/ContainerQz18ScZ/getUserRepositoryService.php';
require __DIR__.'/ContainerQz18ScZ/getTicketStatusRepositoryService.php';
require __DIR__.'/ContainerQz18ScZ/getTicketStatusControllerService.php';
require __DIR__.'/ContainerQz18ScZ/getTicketControllerService.php';
require __DIR__.'/ContainerQz18ScZ/getMessageControllerService.php';
require __DIR__.'/ContainerQz18ScZ/getBaseControllerService.php';
require __DIR__.'/ContainerQz18ScZ/getAuthControllerService.php';
require __DIR__.'/ContainerQz18ScZ/get_Session_DeprecatedService.php';
require __DIR__.'/ContainerQz18ScZ/get_ServiceLocator_XUrKPVUService.php';
require __DIR__.'/ContainerQz18ScZ/get_ServiceLocator_Mx0UMmYService.php';
require __DIR__.'/ContainerQz18ScZ/get_ServiceLocator_EeEAcwIService.php';
require __DIR__.'/ContainerQz18ScZ/get_ServiceLocator_BRdave9Service.php';
require __DIR__.'/ContainerQz18ScZ/get_ServiceLocator_UrgZlSfService.php';
require __DIR__.'/ContainerQz18ScZ/get_ServiceLocator_NxZ6k06Service.php';
require __DIR__.'/ContainerQz18ScZ/get_ServiceLocator_MIGI5yhService.php';
require __DIR__.'/ContainerQz18ScZ/get_ServiceLocator_H42bzttService.php';
require __DIR__.'/ContainerQz18ScZ/get_ServiceLocator_4xy6poZService.php';
require __DIR__.'/ContainerQz18ScZ/get_ServiceLocator_2hevt6oService.php';
require __DIR__.'/ContainerQz18ScZ/get_Container_Private_ValidatorService.php';
require __DIR__.'/ContainerQz18ScZ/get_Container_Private_SessionService.php';
require __DIR__.'/ContainerQz18ScZ/get_Container_Private_Security_Csrf_TokenManagerService.php';
require __DIR__.'/ContainerQz18ScZ/get_Container_Private_FilesystemService.php';
require __DIR__.'/ContainerQz18ScZ/get_Container_Private_CacheClearerService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\LexikJWTAuthenticationBundle';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer';
$classes[] = 'Symfony\Component\Filesystem\Filesystem';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Session';
$classes[] = 'Symfony\Component\Validator\Validator\ValidatorInterface';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionInterface';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Session\DeprecatedSessionFactory';
$classes[] = 'App\Controller\AuthController';
$classes[] = 'App\Service\AuthService';
$classes[] = 'App\Repository\AuthRepository';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher';
$classes[] = 'App\Controller\BaseController';
$classes[] = 'App\Controller\MessageController';
$classes[] = 'App\Service\MessageService';
$classes[] = 'App\Controller\TicketController';
$classes[] = 'App\Service\TicketService';
$classes[] = 'App\Controller\TicketStatusController';
$classes[] = 'App\Service\TicketStatusService';
$classes[] = 'App\Event\EnsureMessageBelongsToTicket';
$classes[] = 'App\Event\EnsureTicketBelongsToUser';
$classes[] = 'App\Repository\MessageRepository';
$classes[] = 'App\Repository\TicketRepository';
$classes[] = 'App\Repository\TicketStatusRepository';
$classes[] = 'App\Repository\UserRepository';
$classes[] = 'App\Requests\RegisterAuthRequest';
$classes[] = 'App\Requests\StoreTicketMessageRequest';
$classes[] = 'App\Requests\StoreTicketRequest';
$classes[] = 'App\Requests\UpdateTicketMessageRequest';
$classes[] = 'App\Requests\UpdateTicketRequest';
$classes[] = 'App\Requests\UpdateTicketStatusRequest';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Doctrine\Common\Annotations\PsrCachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationRegistry';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Strategy\AffirmativeStrategy';
$classes[] = 'Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\Debug\TraceableAuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticatorManager';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleVoter';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\VoteListener';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\DBAL\Logging\LoggerChain';
$classes[] = 'Symfony\Bridge\Doctrine\Logger\DbalLogger';
$classes[] = 'Doctrine\DBAL\Logging\DebugStack';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AnnotationDriver';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\PdoCacheAdapterDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'App\Kernel';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Encoder\LcobucciJWTEncoder';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Services\JWSProvider\LcobucciJWSProvider';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Services\JWTManager';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Services\KeyLoader\RawKeyLoader';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\JsonLoginAuthenticator';
$classes[] = 'Symfony\Component\Security\Http\Authentication\CustomAuthenticationSuccessHandler';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationSuccessHandler';
$classes[] = 'Symfony\Component\Security\Http\Authentication\CustomAuthenticationFailureHandler';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationFailureHandler';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Security\Authenticator\JWTAuthenticator';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\ChainTokenExtractor';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\AuthorizationHeaderTokenExtractor';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ContextListener';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext';
$classes[] = 'Symfony\Component\Security\Core\Security';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CheckCredentialsListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfProtectionListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserProviderListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\PasswordMigratingListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionStrategyListener';
$classes[] = 'Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserCheckerListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory';
$classes[] = 'Symfony\Component\Security\Http\RememberMe\ResponseListener';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Bridge\Doctrine\Security\User\EntityUserProvider';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserChecker';
$classes[] = 'Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener';
$classes[] = 'Symfony\Component\Security\Core\Role\RoleHierarchy';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\StreamedResponseListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\Validator\ValidatorBuilder';
$classes[] = 'Symfony\Component\Validator\Validation';
$classes[] = 'Symfony\Component\Validator\ContainerConstraintValidatorFactory';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineInitializer';
$classes[] = 'Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoExtractor';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineLoader';
$classes[] = 'Symfony\Component\Validator\Constraints\EmailValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\ExpressionValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator';

$preloaded = Preloader::preload($classes);
