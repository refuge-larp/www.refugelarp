<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class phpbb_cache_container extends \Symfony\Component\DependencyInjection\Container
{
    private $parameters = [];
    private $targetDirs = [];

    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services = [];
        $this->syntheticIds = [
            'config.php' => true,
            'dbal.conn.driver' => true,
        ];
        $this->methodMap = [
            'acl.permissions' => 'getAcl_PermissionsService',
            'attachment.delete' => 'getAttachment_DeleteService',
            'attachment.manager' => 'getAttachment_ManagerService',
            'attachment.resync' => 'getAttachment_ResyncService',
            'attachment.upload' => 'getAttachment_UploadService',
            'auth' => 'getAuthService',
            'auth.provider.apache' => 'getAuth_Provider_ApacheService',
            'auth.provider.db' => 'getAuth_Provider_DbService',
            'auth.provider.ldap' => 'getAuth_Provider_LdapService',
            'auth.provider.oauth' => 'getAuth_Provider_OauthService',
            'auth.provider.oauth.service.bitly' => 'getAuth_Provider_Oauth_Service_BitlyService',
            'auth.provider.oauth.service.facebook' => 'getAuth_Provider_Oauth_Service_FacebookService',
            'auth.provider.oauth.service.google' => 'getAuth_Provider_Oauth_Service_GoogleService',
            'auth.provider.oauth.service.twitter' => 'getAuth_Provider_Oauth_Service_TwitterService',
            'auth.provider.oauth.service_collection' => 'getAuth_Provider_Oauth_ServiceCollectionService',
            'auth.provider_collection' => 'getAuth_ProviderCollectionService',
            'avatar.driver.gravatar' => 'getAvatar_Driver_GravatarService',
            'avatar.driver.local' => 'getAvatar_Driver_LocalService',
            'avatar.driver.remote' => 'getAvatar_Driver_RemoteService',
            'avatar.driver.upload' => 'getAvatar_Driver_UploadService',
            'avatar.driver_collection' => 'getAvatar_DriverCollectionService',
            'avatar.manager' => 'getAvatar_ManagerService',
            'cache' => 'getCacheService',
            'cache.driver' => 'getCache_DriverService',
            'captcha.factory' => 'getCaptcha_FactoryService',
            'captcha.plugins.service_collection' => 'getCaptcha_Plugins_ServiceCollectionService',
            'class_loader' => 'getClassLoaderService',
            'class_loader.ext' => 'getClassLoader_ExtService',
            'config' => 'getConfigService',
            'config_text' => 'getConfigTextService',
            'console.command.cache.purge' => 'getConsole_Command_Cache_PurgeService',
            'console.command.config.delete' => 'getConsole_Command_Config_DeleteService',
            'console.command.config.get' => 'getConsole_Command_Config_GetService',
            'console.command.config.increment' => 'getConsole_Command_Config_IncrementService',
            'console.command.config.set' => 'getConsole_Command_Config_SetService',
            'console.command.config.set_atomic' => 'getConsole_Command_Config_SetAtomicService',
            'console.command.cron.list' => 'getConsole_Command_Cron_ListService',
            'console.command.cron.run' => 'getConsole_Command_Cron_RunService',
            'console.command.db.list' => 'getConsole_Command_Db_ListService',
            'console.command.db.migrate' => 'getConsole_Command_Db_MigrateService',
            'console.command.db.revert' => 'getConsole_Command_Db_RevertService',
            'console.command.dev.migration_tips' => 'getConsole_Command_Dev_MigrationTipsService',
            'console.command.extension.disable' => 'getConsole_Command_Extension_DisableService',
            'console.command.extension.enable' => 'getConsole_Command_Extension_EnableService',
            'console.command.extension.purge' => 'getConsole_Command_Extension_PurgeService',
            'console.command.extension.show' => 'getConsole_Command_Extension_ShowService',
            'console.command.fixup.fix_left_right_ids' => 'getConsole_Command_Fixup_FixLeftRightIdsService',
            'console.command.fixup.update_hashes' => 'getConsole_Command_Fixup_UpdateHashesService',
            'console.command.reparser.list' => 'getConsole_Command_Reparser_ListService',
            'console.command.reparser.reparse' => 'getConsole_Command_Reparser_ReparseService',
            'console.command.thumbnail.delete' => 'getConsole_Command_Thumbnail_DeleteService',
            'console.command.thumbnail.generate' => 'getConsole_Command_Thumbnail_GenerateService',
            'console.command.thumbnail.recreate' => 'getConsole_Command_Thumbnail_RecreateService',
            'console.command.update.check' => 'getConsole_Command_Update_CheckService',
            'console.command.user.activate' => 'getConsole_Command_User_ActivateService',
            'console.command.user.add' => 'getConsole_Command_User_AddService',
            'console.command.user.delete' => 'getConsole_Command_User_DeleteService',
            'console.command.user.reclean' => 'getConsole_Command_User_RecleanService',
            'console.command_collection' => 'getConsole_CommandCollectionService',
            'console.exception_subscriber' => 'getConsole_ExceptionSubscriberService',
            'content.visibility' => 'getContent_VisibilityService',
            'controller.helper' => 'getController_HelperService',
            'controller.resolver' => 'getController_ResolverService',
            'core.captcha.plugins.gd' => 'getCore_Captcha_Plugins_GdService',
            'core.captcha.plugins.gd_wave' => 'getCore_Captcha_Plugins_GdWaveService',
            'core.captcha.plugins.nogd' => 'getCore_Captcha_Plugins_NogdService',
            'core.captcha.plugins.qa' => 'getCore_Captcha_Plugins_QaService',
            'core.captcha.plugins.recaptcha' => 'getCore_Captcha_Plugins_RecaptchaService',
            'core.captcha.plugins.recaptcha_v3' => 'getCore_Captcha_Plugins_RecaptchaV3Service',
            'cron.controller' => 'getCron_ControllerService',
            'cron.event_listener' => 'getCron_EventListenerService',
            'cron.lock_db' => 'getCron_LockDbService',
            'cron.manager' => 'getCron_ManagerService',
            'cron.task.core.prune_all_forums' => 'getCron_Task_Core_PruneAllForumsService',
            'cron.task.core.prune_forum' => 'getCron_Task_Core_PruneForumService',
            'cron.task.core.prune_notifications' => 'getCron_Task_Core_PruneNotificationsService',
            'cron.task.core.prune_shadow_topics' => 'getCron_Task_Core_PruneShadowTopicsService',
            'cron.task.core.queue' => 'getCron_Task_Core_QueueService',
            'cron.task.core.tidy_cache' => 'getCron_Task_Core_TidyCacheService',
            'cron.task.core.tidy_database' => 'getCron_Task_Core_TidyDatabaseService',
            'cron.task.core.tidy_plupload' => 'getCron_Task_Core_TidyPluploadService',
            'cron.task.core.tidy_search' => 'getCron_Task_Core_TidySearchService',
            'cron.task.core.tidy_sessions' => 'getCron_Task_Core_TidySessionsService',
            'cron.task.core.tidy_warnings' => 'getCron_Task_Core_TidyWarningsService',
            'cron.task.core.update_hashes' => 'getCron_Task_Core_UpdateHashesService',
            'cron.task.text_reparser.pm_text' => 'getCron_Task_TextReparser_PmTextService',
            'cron.task.text_reparser.poll_option' => 'getCron_Task_TextReparser_PollOptionService',
            'cron.task.text_reparser.poll_title' => 'getCron_Task_TextReparser_PollTitleService',
            'cron.task.text_reparser.post_text' => 'getCron_Task_TextReparser_PostTextService',
            'cron.task.text_reparser.user_signature' => 'getCron_Task_TextReparser_UserSignatureService',
            'cron.task_collection' => 'getCron_TaskCollectionService',
            'dbal.conn' => 'getDbal_ConnService',
            'dbal.extractor' => 'getDbal_ExtractorService',
            'dbal.extractor.extractors.mssql_extractor' => 'getDbal_Extractor_Extractors_MssqlExtractorService',
            'dbal.extractor.extractors.mysql_extractor' => 'getDbal_Extractor_Extractors_MysqlExtractorService',
            'dbal.extractor.extractors.oracle_extractor' => 'getDbal_Extractor_Extractors_OracleExtractorService',
            'dbal.extractor.extractors.postgres_extractor' => 'getDbal_Extractor_Extractors_PostgresExtractorService',
            'dbal.extractor.extractors.sqlite3_extractor' => 'getDbal_Extractor_Extractors_Sqlite3ExtractorService',
            'dbal.extractor.factory' => 'getDbal_Extractor_FactoryService',
            'dbal.tools' => 'getDbal_ToolsService',
            'dbal.tools.factory' => 'getDbal_Tools_FactoryService',
            'dispatcher' => 'getDispatcherService',
            'ext.manager' => 'getExt_ManagerService',
            'feed.forum' => 'getFeed_ForumService',
            'feed.forums' => 'getFeed_ForumsService',
            'feed.helper' => 'getFeed_HelperService',
            'feed.news' => 'getFeed_NewsService',
            'feed.overall' => 'getFeed_OverallService',
            'feed.quote_helper' => 'getFeed_QuoteHelperService',
            'feed.topic' => 'getFeed_TopicService',
            'feed.topics' => 'getFeed_TopicsService',
            'feed.topics_active' => 'getFeed_TopicsActiveService',
            'file_downloader' => 'getFileDownloaderService',
            'file_locator' => 'getFileLocatorService',
            'files.factory' => 'getFiles_FactoryService',
            'files.filespec' => 'getFiles_FilespecService',
            'files.types.form' => 'getFiles_Types_FormService',
            'files.types.local' => 'getFiles_Types_LocalService',
            'files.types.remote' => 'getFiles_Types_RemoteService',
            'files.upload' => 'getFiles_UploadService',
            'filesystem' => 'getFilesystemService',
            'group_helper' => 'getGroupHelperService',
            'groupposition.legend' => 'getGroupposition_LegendService',
            'groupposition.teampage' => 'getGroupposition_TeampageService',
            'hook_finder' => 'getHookFinderService',
            'http_kernel' => 'getHttpKernelService',
            'kernel_exception_subscriber' => 'getKernelExceptionSubscriberService',
            'kernel_terminate_subscriber' => 'getKernelTerminateSubscriberService',
            'language' => 'getLanguageService',
            'language.helper.language_file' => 'getLanguage_Helper_LanguageFileService',
            'language.loader' => 'getLanguage_LoaderService',
            'log' => 'getLogService',
            'message.form.admin' => 'getMessage_Form_AdminService',
            'message.form.topic' => 'getMessage_Form_TopicService',
            'message.form.user' => 'getMessage_Form_UserService',
            'migrator' => 'getMigratorService',
            'migrator.helper' => 'getMigrator_HelperService',
            'migrator.tool.config' => 'getMigrator_Tool_ConfigService',
            'migrator.tool.config_text' => 'getMigrator_Tool_ConfigTextService',
            'migrator.tool.module' => 'getMigrator_Tool_ModuleService',
            'migrator.tool.permission' => 'getMigrator_Tool_PermissionService',
            'migrator.tool_collection' => 'getMigrator_ToolCollectionService',
            'mimetype.content_guesser' => 'getMimetype_ContentGuesserService',
            'mimetype.extension_guesser' => 'getMimetype_ExtensionGuesserService',
            'mimetype.filebinary_mimetype_guesser' => 'getMimetype_FilebinaryMimetypeGuesserService',
            'mimetype.fileinfo_mimetype_guesser' => 'getMimetype_FileinfoMimetypeGuesserService',
            'mimetype.guesser' => 'getMimetype_GuesserService',
            'mimetype.guesser_collection' => 'getMimetype_GuesserCollectionService',
            'module.manager' => 'getModule_ManagerService',
            'notification.method.board' => 'getNotification_Method_BoardService',
            'notification.method.email' => 'getNotification_Method_EmailService',
            'notification.method.jabber' => 'getNotification_Method_JabberService',
            'notification.method_collection' => 'getNotification_MethodCollectionService',
            'notification.type.admin_activate_user' => 'getNotification_Type_AdminActivateUserService',
            'notification.type.approve_post' => 'getNotification_Type_ApprovePostService',
            'notification.type.approve_topic' => 'getNotification_Type_ApproveTopicService',
            'notification.type.bookmark' => 'getNotification_Type_BookmarkService',
            'notification.type.disapprove_post' => 'getNotification_Type_DisapprovePostService',
            'notification.type.disapprove_topic' => 'getNotification_Type_DisapproveTopicService',
            'notification.type.forum' => 'getNotification_Type_ForumService',
            'notification.type.group_request' => 'getNotification_Type_GroupRequestService',
            'notification.type.group_request_approved' => 'getNotification_Type_GroupRequestApprovedService',
            'notification.type.pm' => 'getNotification_Type_PmService',
            'notification.type.post' => 'getNotification_Type_PostService',
            'notification.type.post_in_queue' => 'getNotification_Type_PostInQueueService',
            'notification.type.quote' => 'getNotification_Type_QuoteService',
            'notification.type.report_pm' => 'getNotification_Type_ReportPmService',
            'notification.type.report_pm_closed' => 'getNotification_Type_ReportPmClosedService',
            'notification.type.report_post' => 'getNotification_Type_ReportPostService',
            'notification.type.report_post_closed' => 'getNotification_Type_ReportPostClosedService',
            'notification.type.topic' => 'getNotification_Type_TopicService',
            'notification.type.topic_in_queue' => 'getNotification_Type_TopicInQueueService',
            'notification.type_collection' => 'getNotification_TypeCollectionService',
            'notification_manager' => 'getNotificationManagerService',
            'pagination' => 'getPaginationService',
            'passwords.driver.argon2i' => 'getPasswords_Driver_Argon2iService',
            'passwords.driver.argon2id' => 'getPasswords_Driver_Argon2idService',
            'passwords.driver.bcrypt' => 'getPasswords_Driver_BcryptService',
            'passwords.driver.bcrypt_2y' => 'getPasswords_Driver_Bcrypt2yService',
            'passwords.driver.bcrypt_wcf2' => 'getPasswords_Driver_BcryptWcf2Service',
            'passwords.driver.convert_password' => 'getPasswords_Driver_ConvertPasswordService',
            'passwords.driver.md5_mybb' => 'getPasswords_Driver_Md5MybbService',
            'passwords.driver.md5_phpbb2' => 'getPasswords_Driver_Md5Phpbb2Service',
            'passwords.driver.md5_vb' => 'getPasswords_Driver_Md5VbService',
            'passwords.driver.phpass' => 'getPasswords_Driver_PhpassService',
            'passwords.driver.salted_md5' => 'getPasswords_Driver_SaltedMd5Service',
            'passwords.driver.sha1' => 'getPasswords_Driver_Sha1Service',
            'passwords.driver.sha1_smf' => 'getPasswords_Driver_Sha1SmfService',
            'passwords.driver.sha1_wcf1' => 'getPasswords_Driver_Sha1Wcf1Service',
            'passwords.driver_collection' => 'getPasswords_DriverCollectionService',
            'passwords.driver_helper' => 'getPasswords_DriverHelperService',
            'passwords.helper' => 'getPasswords_HelperService',
            'passwords.manager' => 'getPasswords_ManagerService',
            'passwords.update.lock' => 'getPasswords_Update_LockService',
            'path_helper' => 'getPathHelperService',
            'paul999.tfa.controller' => 'getPaul999_Tfa_ControllerService',
            'paul999.tfa.listener' => 'getPaul999_Tfa_ListenerService',
            'paul999.tfa.module_collection' => 'getPaul999_Tfa_ModuleCollectionService',
            'paul999.tfa.modules.backup_key' => 'getPaul999_Tfa_Modules_BackupKeyService',
            'paul999.tfa.modules.otp' => 'getPaul999_Tfa_Modules_OtpService',
            'paul999.tfa.modules.u2f' => 'getPaul999_Tfa_Modules_U2fService',
            'paul999.tfa.session_helper' => 'getPaul999_Tfa_SessionHelperService',
            'php_ini' => 'getPhpIniService',
            'phpbb.autogroups.admin_controller' => 'getPhpbb_Autogroups_AdminControllerService',
            'phpbb.autogroups.cron.task.autogroups_check' => 'getPhpbb_Autogroups_Cron_Task_AutogroupsCheckService',
            'phpbb.autogroups.helper' => 'getPhpbb_Autogroups_HelperService',
            'phpbb.autogroups.listener' => 'getPhpbb_Autogroups_ListenerService',
            'phpbb.autogroups.manager' => 'getPhpbb_Autogroups_ManagerService',
            'phpbb.autogroups.notification.type.group_added' => 'getPhpbb_Autogroups_Notification_Type_GroupAddedService',
            'phpbb.autogroups.notification.type.group_removed' => 'getPhpbb_Autogroups_Notification_Type_GroupRemovedService',
            'phpbb.autogroups.type.birthdays' => 'getPhpbb_Autogroups_Type_BirthdaysService',
            'phpbb.autogroups.type.lastvisit' => 'getPhpbb_Autogroups_Type_LastvisitService',
            'phpbb.autogroups.type.membership' => 'getPhpbb_Autogroups_Type_MembershipService',
            'phpbb.autogroups.type.posts' => 'getPhpbb_Autogroups_Type_PostsService',
            'phpbb.autogroups.type.warnings' => 'getPhpbb_Autogroups_Type_WarningsService',
            'phpbb.autogroups.type_collection' => 'getPhpbb_Autogroups_TypeCollectionService',
            'phpbb.boardannouncements.controller' => 'getPhpbb_Boardannouncements_ControllerService',
            'phpbb.boardannouncements.listener' => 'getPhpbb_Boardannouncements_ListenerService',
            'phpbb.collapsiblecategories.controller' => 'getPhpbb_Collapsiblecategories_ControllerService',
            'phpbb.collapsiblecategories.listener' => 'getPhpbb_Collapsiblecategories_ListenerService',
            'phpbb.collapsiblecategories.operator' => 'getPhpbb_Collapsiblecategories_OperatorService',
            'phpbb.feed.controller' => 'getPhpbb_Feed_ControllerService',
            'phpbb.help.controller.bbcode' => 'getPhpbb_Help_Controller_BbcodeService',
            'phpbb.help.controller.faq' => 'getPhpbb_Help_Controller_FaqService',
            'phpbb.help.manager' => 'getPhpbb_Help_ManagerService',
            'phpbb.report.controller' => 'getPhpbb_Report_ControllerService',
            'phpbb.report.handler_factory' => 'getPhpbb_Report_HandlerFactoryService',
            'phpbb.report.handlers.report_handler_pm' => 'getPhpbb_Report_Handlers_ReportHandlerPmService',
            'phpbb.report.handlers.report_handler_post' => 'getPhpbb_Report_Handlers_ReportHandlerPostService',
            'phpbb.report.report_reason_list_provider' => 'getPhpbb_Report_ReportReasonListProviderService',
            'phpbb.topicprefixes.admin_controller' => 'getPhpbb_Topicprefixes_AdminControllerService',
            'phpbb.topicprefixes.listener' => 'getPhpbb_Topicprefixes_ListenerService',
            'phpbb.topicprefixes.manager' => 'getPhpbb_Topicprefixes_ManagerService',
            'phpbb.topicprefixes.nestedset_prefixes' => 'getPhpbb_Topicprefixes_NestedsetPrefixesService',
            'phpbb.topicprefixes.table_lock' => 'getPhpbb_Topicprefixes_TableLockService',
            'phpbb.ucp.controller.reset_password' => 'getPhpbb_Ucp_Controller_ResetPasswordService',
            'phpbb.viglink.acp_listener' => 'getPhpbb_Viglink_AcpListenerService',
            'phpbb.viglink.cron.task.viglink' => 'getPhpbb_Viglink_Cron_Task_ViglinkService',
            'phpbb.viglink.helper' => 'getPhpbb_Viglink_HelperService',
            'phpbb.viglink.listener' => 'getPhpbb_Viglink_ListenerService',
            'phpbbmodders.banhammer.admin.controller' => 'getPhpbbmodders_Banhammer_Admin_ControllerService',
            'phpbbmodders.banhammer.core.bantime' => 'getPhpbbmodders_Banhammer_Core_BantimeService',
            'phpbbmodders.banhammer.listener' => 'getPhpbbmodders_Banhammer_ListenerService',
            'planetstyles.flightdeck.listener' => 'getPlanetstyles_Flightdeck_ListenerService',
            'plupload' => 'getPluploadService',
            'profilefields.lang_helper' => 'getProfilefields_LangHelperService',
            'profilefields.manager' => 'getProfilefields_ManagerService',
            'profilefields.type.bool' => 'getProfilefields_Type_BoolService',
            'profilefields.type.date' => 'getProfilefields_Type_DateService',
            'profilefields.type.dropdown' => 'getProfilefields_Type_DropdownService',
            'profilefields.type.int' => 'getProfilefields_Type_IntService',
            'profilefields.type.string' => 'getProfilefields_Type_StringService',
            'profilefields.type.text' => 'getProfilefields_Type_TextService',
            'profilefields.type.url' => 'getProfilefields_Type_UrlService',
            'profilefields.type_collection' => 'getProfilefields_TypeCollectionService',
            'request' => 'getRequestService',
            'request_stack' => 'getRequestStackService',
            'rmcgirr83.printallposts.listener' => 'getRmcgirr83_Printallposts_ListenerService',
            'router' => 'getRouterService',
            'router.listener' => 'getRouter_ListenerService',
            'routing.chained_resources_locator' => 'getRouting_ChainedResourcesLocatorService',
            'routing.delegated_loader' => 'getRouting_DelegatedLoaderService',
            'routing.helper' => 'getRouting_HelperService',
            'routing.loader.collection' => 'getRouting_Loader_CollectionService',
            'routing.loader.yaml' => 'getRouting_Loader_YamlService',
            'routing.resolver' => 'getRouting_ResolverService',
            'routing.resources_locator.collection' => 'getRouting_ResourcesLocator_CollectionService',
            'routing.resources_locator.default' => 'getRouting_ResourcesLocator_DefaultService',
            'stevotvr.flair.controller.acp.cats' => 'getStevotvr_Flair_Controller_Acp_CatsService',
            'stevotvr.flair.controller.acp.flair' => 'getStevotvr_Flair_Controller_Acp_FlairService',
            'stevotvr.flair.controller.acp.images' => 'getStevotvr_Flair_Controller_Acp_ImagesService',
            'stevotvr.flair.controller.acp.main' => 'getStevotvr_Flair_Controller_Acp_MainService',
            'stevotvr.flair.controller.legend' => 'getStevotvr_Flair_Controller_LegendService',
            'stevotvr.flair.controller.mcp.user' => 'getStevotvr_Flair_Controller_Mcp_UserService',
            'stevotvr.flair.controller.ucp.flair' => 'getStevotvr_Flair_Controller_Ucp_FlairService',
            'stevotvr.flair.cron.task.main' => 'getStevotvr_Flair_Cron_Task_MainService',
            'stevotvr.flair.entity.category' => 'getStevotvr_Flair_Entity_CategoryService',
            'stevotvr.flair.entity.flair' => 'getStevotvr_Flair_Entity_FlairService',
            'stevotvr.flair.listener' => 'getStevotvr_Flair_ListenerService',
            'stevotvr.flair.notification.type.flair' => 'getStevotvr_Flair_Notification_Type_FlairService',
            'stevotvr.flair.operator.category' => 'getStevotvr_Flair_Operator_CategoryService',
            'stevotvr.flair.operator.flair' => 'getStevotvr_Flair_Operator_FlairService',
            'stevotvr.flair.operator.image' => 'getStevotvr_Flair_Operator_ImageService',
            'stevotvr.flair.operator.trigger' => 'getStevotvr_Flair_Operator_TriggerService',
            'stevotvr.flair.operator.user' => 'getStevotvr_Flair_Operator_UserService',
            'symfony_request' => 'getSymfonyRequestService',
            'symfony_response_listener' => 'getSymfonyResponseListenerService',
            'template' => 'getTemplateService',
            'template.twig.environment' => 'getTemplate_Twig_EnvironmentService',
            'template.twig.extensions.avatar' => 'getTemplate_Twig_Extensions_AvatarService',
            'template.twig.extensions.collection' => 'getTemplate_Twig_Extensions_CollectionService',
            'template.twig.extensions.config' => 'getTemplate_Twig_Extensions_ConfigService',
            'template.twig.extensions.debug' => 'getTemplate_Twig_Extensions_DebugService',
            'template.twig.extensions.phpbb' => 'getTemplate_Twig_Extensions_PhpbbService',
            'template.twig.extensions.routing' => 'getTemplate_Twig_Extensions_RoutingService',
            'template.twig.extensions.username' => 'getTemplate_Twig_Extensions_UsernameService',
            'template.twig.lexer' => 'getTemplate_Twig_LexerService',
            'template.twig.loader' => 'getTemplate_Twig_LoaderService',
            'template_context' => 'getTemplateContextService',
            'text_formatter.acp_utils' => 'getTextFormatter_AcpUtilsService',
            'text_formatter.data_access' => 'getTextFormatter_DataAccessService',
            'text_formatter.s9e.bbcode_merger' => 'getTextFormatter_S9e_BbcodeMergerService',
            'text_formatter.s9e.factory' => 'getTextFormatter_S9e_FactoryService',
            'text_formatter.s9e.link_helper' => 'getTextFormatter_S9e_LinkHelperService',
            'text_formatter.s9e.parser' => 'getTextFormatter_S9e_ParserService',
            'text_formatter.s9e.quote_helper' => 'getTextFormatter_S9e_QuoteHelperService',
            'text_formatter.s9e.renderer' => 'getTextFormatter_S9e_RendererService',
            'text_formatter.s9e.utils' => 'getTextFormatter_S9e_UtilsService',
            'text_reparser.contact_admin_info' => 'getTextReparser_ContactAdminInfoService',
            'text_reparser.forum_description' => 'getTextReparser_ForumDescriptionService',
            'text_reparser.forum_rules' => 'getTextReparser_ForumRulesService',
            'text_reparser.group_description' => 'getTextReparser_GroupDescriptionService',
            'text_reparser.lock' => 'getTextReparser_LockService',
            'text_reparser.manager' => 'getTextReparser_ManagerService',
            'text_reparser.pm_text' => 'getTextReparser_PmTextService',
            'text_reparser.poll_option' => 'getTextReparser_PollOptionService',
            'text_reparser.poll_title' => 'getTextReparser_PollTitleService',
            'text_reparser.post_text' => 'getTextReparser_PostTextService',
            'text_reparser.user_signature' => 'getTextReparser_UserSignatureService',
            'text_reparser_collection' => 'getTextReparserCollectionService',
            'upload_imagesize' => 'getUploadImagesizeService',
            'user' => 'getUserService',
            'user_loader' => 'getUserLoaderService',
            'version_helper' => 'getVersionHelperService',
            'viewonline_helper' => 'getViewonlineHelperService',
            'vse.abbc3.acp_listener' => 'getVse_Abbc3_AcpListenerService',
            'vse.abbc3.acp_manager' => 'getVse_Abbc3_AcpManagerService',
            'vse.abbc3.bbcodes_config' => 'getVse_Abbc3_BbcodesConfigService',
            'vse.abbc3.bbcodes_display' => 'getVse_Abbc3_BbcodesDisplayService',
            'vse.abbc3.bbcodes_help' => 'getVse_Abbc3_BbcodesHelpService',
            'vse.abbc3.listener' => 'getVse_Abbc3_ListenerService',
            'vse.abbc3.wizard' => 'getVse_Abbc3_WizardService',
        ];
        $this->privates = [
            'text_formatter.cache' => true,
            'text_formatter.parser' => true,
            'text_formatter.renderer' => true,
            'text_formatter.utils' => true,
            'acl.permissions' => true,
            'attachment.delete' => true,
            'attachment.manager' => true,
            'attachment.resync' => true,
            'attachment.upload' => true,
            'auth' => true,
            'auth.provider.apache' => true,
            'auth.provider.db' => true,
            'auth.provider.ldap' => true,
            'auth.provider.oauth' => true,
            'auth.provider.oauth.service.bitly' => true,
            'auth.provider.oauth.service.facebook' => true,
            'auth.provider.oauth.service.google' => true,
            'auth.provider.oauth.service.twitter' => true,
            'auth.provider.oauth.service_collection' => true,
            'auth.provider_collection' => true,
            'avatar.driver.gravatar' => true,
            'avatar.driver.local' => true,
            'avatar.driver.remote' => true,
            'avatar.driver.upload' => true,
            'avatar.driver_collection' => true,
            'avatar.manager' => true,
            'cache' => true,
            'cache.driver' => true,
            'captcha.factory' => true,
            'captcha.plugins.service_collection' => true,
            'class_loader' => true,
            'class_loader.ext' => true,
            'config' => true,
            'config.php' => true,
            'config_text' => true,
            'console.command.cache.purge' => true,
            'console.command.config.delete' => true,
            'console.command.config.get' => true,
            'console.command.config.increment' => true,
            'console.command.config.set' => true,
            'console.command.config.set_atomic' => true,
            'console.command.cron.list' => true,
            'console.command.cron.run' => true,
            'console.command.db.list' => true,
            'console.command.db.migrate' => true,
            'console.command.db.revert' => true,
            'console.command.dev.migration_tips' => true,
            'console.command.extension.disable' => true,
            'console.command.extension.enable' => true,
            'console.command.extension.purge' => true,
            'console.command.extension.show' => true,
            'console.command.fixup.fix_left_right_ids' => true,
            'console.command.fixup.update_hashes' => true,
            'console.command.reparser.list' => true,
            'console.command.reparser.reparse' => true,
            'console.command.thumbnail.delete' => true,
            'console.command.thumbnail.generate' => true,
            'console.command.thumbnail.recreate' => true,
            'console.command.update.check' => true,
            'console.command.user.activate' => true,
            'console.command.user.add' => true,
            'console.command.user.delete' => true,
            'console.command.user.reclean' => true,
            'console.command_collection' => true,
            'console.exception_subscriber' => true,
            'content.visibility' => true,
            'controller.helper' => true,
            'controller.resolver' => true,
            'core.captcha.plugins.gd' => true,
            'core.captcha.plugins.gd_wave' => true,
            'core.captcha.plugins.nogd' => true,
            'core.captcha.plugins.qa' => true,
            'core.captcha.plugins.recaptcha' => true,
            'core.captcha.plugins.recaptcha_v3' => true,
            'cron.controller' => true,
            'cron.event_listener' => true,
            'cron.lock_db' => true,
            'cron.manager' => true,
            'cron.task.core.prune_all_forums' => true,
            'cron.task.core.prune_forum' => true,
            'cron.task.core.prune_notifications' => true,
            'cron.task.core.prune_shadow_topics' => true,
            'cron.task.core.queue' => true,
            'cron.task.core.tidy_cache' => true,
            'cron.task.core.tidy_database' => true,
            'cron.task.core.tidy_plupload' => true,
            'cron.task.core.tidy_search' => true,
            'cron.task.core.tidy_sessions' => true,
            'cron.task.core.tidy_warnings' => true,
            'cron.task.core.update_hashes' => true,
            'cron.task.text_reparser.pm_text' => true,
            'cron.task.text_reparser.poll_option' => true,
            'cron.task.text_reparser.poll_title' => true,
            'cron.task.text_reparser.post_text' => true,
            'cron.task.text_reparser.user_signature' => true,
            'cron.task_collection' => true,
            'dbal.conn' => true,
            'dbal.conn.driver' => true,
            'dbal.extractor' => true,
            'dbal.extractor.extractors.mssql_extractor' => true,
            'dbal.extractor.extractors.mysql_extractor' => true,
            'dbal.extractor.extractors.oracle_extractor' => true,
            'dbal.extractor.extractors.postgres_extractor' => true,
            'dbal.extractor.extractors.sqlite3_extractor' => true,
            'dbal.extractor.factory' => true,
            'dbal.tools' => true,
            'dbal.tools.factory' => true,
            'dispatcher' => true,
            'ext.manager' => true,
            'feed.forum' => true,
            'feed.forums' => true,
            'feed.helper' => true,
            'feed.news' => true,
            'feed.overall' => true,
            'feed.quote_helper' => true,
            'feed.topic' => true,
            'feed.topics' => true,
            'feed.topics_active' => true,
            'file_downloader' => true,
            'file_locator' => true,
            'files.factory' => true,
            'files.filespec' => true,
            'files.types.form' => true,
            'files.types.local' => true,
            'files.types.remote' => true,
            'files.upload' => true,
            'filesystem' => true,
            'group_helper' => true,
            'groupposition.legend' => true,
            'groupposition.teampage' => true,
            'hook_finder' => true,
            'http_kernel' => true,
            'kernel_exception_subscriber' => true,
            'kernel_terminate_subscriber' => true,
            'language' => true,
            'language.helper.language_file' => true,
            'language.loader' => true,
            'log' => true,
            'message.form.admin' => true,
            'message.form.topic' => true,
            'message.form.user' => true,
            'migrator' => true,
            'migrator.helper' => true,
            'migrator.tool.config' => true,
            'migrator.tool.config_text' => true,
            'migrator.tool.module' => true,
            'migrator.tool.permission' => true,
            'migrator.tool_collection' => true,
            'mimetype.content_guesser' => true,
            'mimetype.extension_guesser' => true,
            'mimetype.filebinary_mimetype_guesser' => true,
            'mimetype.fileinfo_mimetype_guesser' => true,
            'mimetype.guesser' => true,
            'mimetype.guesser_collection' => true,
            'module.manager' => true,
            'notification.method.board' => true,
            'notification.method.email' => true,
            'notification.method.jabber' => true,
            'notification.method_collection' => true,
            'notification.type.admin_activate_user' => true,
            'notification.type.approve_post' => true,
            'notification.type.approve_topic' => true,
            'notification.type.bookmark' => true,
            'notification.type.disapprove_post' => true,
            'notification.type.disapprove_topic' => true,
            'notification.type.forum' => true,
            'notification.type.group_request' => true,
            'notification.type.group_request_approved' => true,
            'notification.type.pm' => true,
            'notification.type.post' => true,
            'notification.type.post_in_queue' => true,
            'notification.type.quote' => true,
            'notification.type.report_pm' => true,
            'notification.type.report_pm_closed' => true,
            'notification.type.report_post' => true,
            'notification.type.report_post_closed' => true,
            'notification.type.topic' => true,
            'notification.type.topic_in_queue' => true,
            'notification.type_collection' => true,
            'notification_manager' => true,
            'pagination' => true,
            'passwords.driver.argon2i' => true,
            'passwords.driver.argon2id' => true,
            'passwords.driver.bcrypt' => true,
            'passwords.driver.bcrypt_2y' => true,
            'passwords.driver.bcrypt_wcf2' => true,
            'passwords.driver.convert_password' => true,
            'passwords.driver.md5_mybb' => true,
            'passwords.driver.md5_phpbb2' => true,
            'passwords.driver.md5_vb' => true,
            'passwords.driver.phpass' => true,
            'passwords.driver.salted_md5' => true,
            'passwords.driver.sha1' => true,
            'passwords.driver.sha1_smf' => true,
            'passwords.driver.sha1_wcf1' => true,
            'passwords.driver_collection' => true,
            'passwords.driver_helper' => true,
            'passwords.helper' => true,
            'passwords.manager' => true,
            'passwords.update.lock' => true,
            'path_helper' => true,
            'paul999.tfa.controller' => true,
            'paul999.tfa.listener' => true,
            'paul999.tfa.module_collection' => true,
            'paul999.tfa.modules.backup_key' => true,
            'paul999.tfa.modules.otp' => true,
            'paul999.tfa.modules.u2f' => true,
            'paul999.tfa.session_helper' => true,
            'php_ini' => true,
            'phpbb.autogroups.admin_controller' => true,
            'phpbb.autogroups.cron.task.autogroups_check' => true,
            'phpbb.autogroups.helper' => true,
            'phpbb.autogroups.listener' => true,
            'phpbb.autogroups.manager' => true,
            'phpbb.autogroups.notification.type.group_added' => true,
            'phpbb.autogroups.notification.type.group_removed' => true,
            'phpbb.autogroups.type.birthdays' => true,
            'phpbb.autogroups.type.lastvisit' => true,
            'phpbb.autogroups.type.membership' => true,
            'phpbb.autogroups.type.posts' => true,
            'phpbb.autogroups.type.warnings' => true,
            'phpbb.autogroups.type_collection' => true,
            'phpbb.boardannouncements.controller' => true,
            'phpbb.boardannouncements.listener' => true,
            'phpbb.collapsiblecategories.controller' => true,
            'phpbb.collapsiblecategories.listener' => true,
            'phpbb.collapsiblecategories.operator' => true,
            'phpbb.feed.controller' => true,
            'phpbb.help.controller.bbcode' => true,
            'phpbb.help.controller.faq' => true,
            'phpbb.help.manager' => true,
            'phpbb.report.controller' => true,
            'phpbb.report.handler_factory' => true,
            'phpbb.report.handlers.report_handler_pm' => true,
            'phpbb.report.handlers.report_handler_post' => true,
            'phpbb.report.report_reason_list_provider' => true,
            'phpbb.topicprefixes.admin_controller' => true,
            'phpbb.topicprefixes.listener' => true,
            'phpbb.topicprefixes.manager' => true,
            'phpbb.topicprefixes.nestedset_prefixes' => true,
            'phpbb.topicprefixes.table_lock' => true,
            'phpbb.ucp.controller.reset_password' => true,
            'phpbb.viglink.acp_listener' => true,
            'phpbb.viglink.cron.task.viglink' => true,
            'phpbb.viglink.helper' => true,
            'phpbb.viglink.listener' => true,
            'phpbbmodders.banhammer.admin.controller' => true,
            'phpbbmodders.banhammer.core.bantime' => true,
            'phpbbmodders.banhammer.listener' => true,
            'planetstyles.flightdeck.listener' => true,
            'plupload' => true,
            'profilefields.lang_helper' => true,
            'profilefields.manager' => true,
            'profilefields.type.bool' => true,
            'profilefields.type.date' => true,
            'profilefields.type.dropdown' => true,
            'profilefields.type.int' => true,
            'profilefields.type.string' => true,
            'profilefields.type.text' => true,
            'profilefields.type.url' => true,
            'profilefields.type_collection' => true,
            'request' => true,
            'request_stack' => true,
            'rmcgirr83.printallposts.listener' => true,
            'router' => true,
            'router.listener' => true,
            'routing.chained_resources_locator' => true,
            'routing.delegated_loader' => true,
            'routing.helper' => true,
            'routing.loader.collection' => true,
            'routing.loader.yaml' => true,
            'routing.resolver' => true,
            'routing.resources_locator.collection' => true,
            'routing.resources_locator.default' => true,
            'stevotvr.flair.controller.acp.cats' => true,
            'stevotvr.flair.controller.acp.flair' => true,
            'stevotvr.flair.controller.acp.images' => true,
            'stevotvr.flair.controller.acp.main' => true,
            'stevotvr.flair.controller.legend' => true,
            'stevotvr.flair.controller.mcp.user' => true,
            'stevotvr.flair.controller.ucp.flair' => true,
            'stevotvr.flair.cron.task.main' => true,
            'stevotvr.flair.entity.category' => true,
            'stevotvr.flair.entity.flair' => true,
            'stevotvr.flair.listener' => true,
            'stevotvr.flair.notification.type.flair' => true,
            'stevotvr.flair.operator.category' => true,
            'stevotvr.flair.operator.flair' => true,
            'stevotvr.flair.operator.image' => true,
            'stevotvr.flair.operator.trigger' => true,
            'stevotvr.flair.operator.user' => true,
            'symfony_request' => true,
            'symfony_response_listener' => true,
            'template' => true,
            'template.twig.environment' => true,
            'template.twig.extensions.avatar' => true,
            'template.twig.extensions.collection' => true,
            'template.twig.extensions.config' => true,
            'template.twig.extensions.debug' => true,
            'template.twig.extensions.phpbb' => true,
            'template.twig.extensions.routing' => true,
            'template.twig.extensions.username' => true,
            'template.twig.lexer' => true,
            'template.twig.loader' => true,
            'template_context' => true,
            'text_formatter.acp_utils' => true,
            'text_formatter.data_access' => true,
            'text_formatter.s9e.bbcode_merger' => true,
            'text_formatter.s9e.factory' => true,
            'text_formatter.s9e.link_helper' => true,
            'text_formatter.s9e.parser' => true,
            'text_formatter.s9e.quote_helper' => true,
            'text_formatter.s9e.renderer' => true,
            'text_formatter.s9e.utils' => true,
            'text_reparser.contact_admin_info' => true,
            'text_reparser.forum_description' => true,
            'text_reparser.forum_rules' => true,
            'text_reparser.group_description' => true,
            'text_reparser.lock' => true,
            'text_reparser.manager' => true,
            'text_reparser.pm_text' => true,
            'text_reparser.poll_option' => true,
            'text_reparser.poll_title' => true,
            'text_reparser.post_text' => true,
            'text_reparser.user_signature' => true,
            'text_reparser_collection' => true,
            'upload_imagesize' => true,
            'user' => true,
            'user_loader' => true,
            'version_helper' => true,
            'viewonline_helper' => true,
            'vse.abbc3.acp_listener' => true,
            'vse.abbc3.acp_manager' => true,
            'vse.abbc3.bbcodes_config' => true,
            'vse.abbc3.bbcodes_display' => true,
            'vse.abbc3.bbcodes_help' => true,
            'vse.abbc3.listener' => true,
            'vse.abbc3.wizard' => true,
        ];
        $this->aliases = [
            'text_formatter.cache' => 'text_formatter.s9e.factory',
            'text_formatter.parser' => 'text_formatter.s9e.parser',
            'text_formatter.renderer' => 'text_formatter.s9e.renderer',
            'text_formatter.utils' => 'text_formatter.s9e.utils',
        ];
    }

    public function getRemovedIds()
    {
        return [
            'Psr\\Container\\ContainerInterface' => true,
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
            'acl.permissions' => true,
            'attachment.delete' => true,
            'attachment.manager' => true,
            'attachment.resync' => true,
            'attachment.upload' => true,
            'auth' => true,
            'auth.provider.apache' => true,
            'auth.provider.db' => true,
            'auth.provider.ldap' => true,
            'auth.provider.oauth' => true,
            'auth.provider.oauth.service.bitly' => true,
            'auth.provider.oauth.service.facebook' => true,
            'auth.provider.oauth.service.google' => true,
            'auth.provider.oauth.service.twitter' => true,
            'auth.provider.oauth.service_collection' => true,
            'auth.provider_collection' => true,
            'avatar.driver.gravatar' => true,
            'avatar.driver.local' => true,
            'avatar.driver.remote' => true,
            'avatar.driver.upload' => true,
            'avatar.driver_collection' => true,
            'avatar.manager' => true,
            'cache' => true,
            'cache.driver' => true,
            'captcha.factory' => true,
            'captcha.plugins.service_collection' => true,
            'class_loader' => true,
            'class_loader.ext' => true,
            'config' => true,
            'config.php' => true,
            'config_text' => true,
            'console.command.cache.purge' => true,
            'console.command.config.delete' => true,
            'console.command.config.get' => true,
            'console.command.config.increment' => true,
            'console.command.config.set' => true,
            'console.command.config.set_atomic' => true,
            'console.command.cron.list' => true,
            'console.command.cron.run' => true,
            'console.command.db.list' => true,
            'console.command.db.migrate' => true,
            'console.command.db.revert' => true,
            'console.command.dev.migration_tips' => true,
            'console.command.extension.disable' => true,
            'console.command.extension.enable' => true,
            'console.command.extension.purge' => true,
            'console.command.extension.show' => true,
            'console.command.fixup.fix_left_right_ids' => true,
            'console.command.fixup.update_hashes' => true,
            'console.command.reparser.list' => true,
            'console.command.reparser.reparse' => true,
            'console.command.thumbnail.delete' => true,
            'console.command.thumbnail.generate' => true,
            'console.command.thumbnail.recreate' => true,
            'console.command.update.check' => true,
            'console.command.user.activate' => true,
            'console.command.user.add' => true,
            'console.command.user.delete' => true,
            'console.command.user.reclean' => true,
            'console.command_collection' => true,
            'console.exception_subscriber' => true,
            'content.visibility' => true,
            'controller.helper' => true,
            'controller.resolver' => true,
            'core.captcha.plugins.gd' => true,
            'core.captcha.plugins.gd_wave' => true,
            'core.captcha.plugins.nogd' => true,
            'core.captcha.plugins.qa' => true,
            'core.captcha.plugins.recaptcha' => true,
            'core.captcha.plugins.recaptcha_v3' => true,
            'cron.controller' => true,
            'cron.event_listener' => true,
            'cron.lock_db' => true,
            'cron.manager' => true,
            'cron.task.core.prune_all_forums' => true,
            'cron.task.core.prune_forum' => true,
            'cron.task.core.prune_notifications' => true,
            'cron.task.core.prune_shadow_topics' => true,
            'cron.task.core.queue' => true,
            'cron.task.core.tidy_cache' => true,
            'cron.task.core.tidy_database' => true,
            'cron.task.core.tidy_plupload' => true,
            'cron.task.core.tidy_search' => true,
            'cron.task.core.tidy_sessions' => true,
            'cron.task.core.tidy_warnings' => true,
            'cron.task.core.update_hashes' => true,
            'cron.task.text_reparser.pm_text' => true,
            'cron.task.text_reparser.poll_option' => true,
            'cron.task.text_reparser.poll_title' => true,
            'cron.task.text_reparser.post_text' => true,
            'cron.task.text_reparser.user_signature' => true,
            'cron.task_collection' => true,
            'dbal.conn' => true,
            'dbal.conn.driver' => true,
            'dbal.extractor' => true,
            'dbal.extractor.extractors.mssql_extractor' => true,
            'dbal.extractor.extractors.mysql_extractor' => true,
            'dbal.extractor.extractors.oracle_extractor' => true,
            'dbal.extractor.extractors.postgres_extractor' => true,
            'dbal.extractor.extractors.sqlite3_extractor' => true,
            'dbal.extractor.factory' => true,
            'dbal.tools' => true,
            'dbal.tools.factory' => true,
            'dispatcher' => true,
            'ext.manager' => true,
            'feed.forum' => true,
            'feed.forums' => true,
            'feed.helper' => true,
            'feed.news' => true,
            'feed.overall' => true,
            'feed.quote_helper' => true,
            'feed.topic' => true,
            'feed.topics' => true,
            'feed.topics_active' => true,
            'file_downloader' => true,
            'file_locator' => true,
            'files.factory' => true,
            'files.filespec' => true,
            'files.types.form' => true,
            'files.types.local' => true,
            'files.types.remote' => true,
            'files.upload' => true,
            'filesystem' => true,
            'group_helper' => true,
            'groupposition.legend' => true,
            'groupposition.teampage' => true,
            'hook_finder' => true,
            'http_kernel' => true,
            'kernel_exception_subscriber' => true,
            'kernel_terminate_subscriber' => true,
            'language' => true,
            'language.helper.language_file' => true,
            'language.loader' => true,
            'language.loader_abstract' => true,
            'log' => true,
            'message.form.admin' => true,
            'message.form.topic' => true,
            'message.form.user' => true,
            'migrator' => true,
            'migrator.helper' => true,
            'migrator.tool.config' => true,
            'migrator.tool.config_text' => true,
            'migrator.tool.module' => true,
            'migrator.tool.permission' => true,
            'migrator.tool_collection' => true,
            'mimetype.content_guesser' => true,
            'mimetype.extension_guesser' => true,
            'mimetype.filebinary_mimetype_guesser' => true,
            'mimetype.fileinfo_mimetype_guesser' => true,
            'mimetype.guesser' => true,
            'mimetype.guesser_collection' => true,
            'module.manager' => true,
            'notification.method.board' => true,
            'notification.method.email' => true,
            'notification.method.jabber' => true,
            'notification.method_collection' => true,
            'notification.type.admin_activate_user' => true,
            'notification.type.approve_post' => true,
            'notification.type.approve_topic' => true,
            'notification.type.base' => true,
            'notification.type.bookmark' => true,
            'notification.type.disapprove_post' => true,
            'notification.type.disapprove_topic' => true,
            'notification.type.forum' => true,
            'notification.type.group_request' => true,
            'notification.type.group_request_approved' => true,
            'notification.type.pm' => true,
            'notification.type.post' => true,
            'notification.type.post_in_queue' => true,
            'notification.type.quote' => true,
            'notification.type.report_pm' => true,
            'notification.type.report_pm_closed' => true,
            'notification.type.report_post' => true,
            'notification.type.report_post_closed' => true,
            'notification.type.topic' => true,
            'notification.type.topic_in_queue' => true,
            'notification.type_collection' => true,
            'notification_manager' => true,
            'pagination' => true,
            'passwords.driver.argon2i' => true,
            'passwords.driver.argon2id' => true,
            'passwords.driver.bcrypt' => true,
            'passwords.driver.bcrypt_2y' => true,
            'passwords.driver.bcrypt_wcf2' => true,
            'passwords.driver.convert_password' => true,
            'passwords.driver.md5_mybb' => true,
            'passwords.driver.md5_phpbb2' => true,
            'passwords.driver.md5_vb' => true,
            'passwords.driver.phpass' => true,
            'passwords.driver.salted_md5' => true,
            'passwords.driver.sha1' => true,
            'passwords.driver.sha1_smf' => true,
            'passwords.driver.sha1_wcf1' => true,
            'passwords.driver_collection' => true,
            'passwords.driver_helper' => true,
            'passwords.helper' => true,
            'passwords.manager' => true,
            'passwords.update.lock' => true,
            'path_helper' => true,
            'paul999.tfa.controller' => true,
            'paul999.tfa.listener' => true,
            'paul999.tfa.module_collection' => true,
            'paul999.tfa.modules.backup_key' => true,
            'paul999.tfa.modules.otp' => true,
            'paul999.tfa.modules.u2f' => true,
            'paul999.tfa.session_helper' => true,
            'php_ini' => true,
            'phpbb.autogroups.admin_controller' => true,
            'phpbb.autogroups.cron.task.autogroups_check' => true,
            'phpbb.autogroups.helper' => true,
            'phpbb.autogroups.listener' => true,
            'phpbb.autogroups.manager' => true,
            'phpbb.autogroups.notification.type.group_added' => true,
            'phpbb.autogroups.notification.type.group_removed' => true,
            'phpbb.autogroups.type.base' => true,
            'phpbb.autogroups.type.birthdays' => true,
            'phpbb.autogroups.type.lastvisit' => true,
            'phpbb.autogroups.type.membership' => true,
            'phpbb.autogroups.type.posts' => true,
            'phpbb.autogroups.type.warnings' => true,
            'phpbb.autogroups.type_collection' => true,
            'phpbb.boardannouncements.controller' => true,
            'phpbb.boardannouncements.listener' => true,
            'phpbb.collapsiblecategories.controller' => true,
            'phpbb.collapsiblecategories.listener' => true,
            'phpbb.collapsiblecategories.operator' => true,
            'phpbb.feed.controller' => true,
            'phpbb.help.controller.bbcode' => true,
            'phpbb.help.controller.faq' => true,
            'phpbb.help.manager' => true,
            'phpbb.report.controller' => true,
            'phpbb.report.handler_factory' => true,
            'phpbb.report.handlers.report_handler_pm' => true,
            'phpbb.report.handlers.report_handler_post' => true,
            'phpbb.report.report_reason_list_provider' => true,
            'phpbb.topicprefixes.admin_controller' => true,
            'phpbb.topicprefixes.listener' => true,
            'phpbb.topicprefixes.manager' => true,
            'phpbb.topicprefixes.nestedset_prefixes' => true,
            'phpbb.topicprefixes.table_lock' => true,
            'phpbb.ucp.controller.reset_password' => true,
            'phpbb.viglink.acp_listener' => true,
            'phpbb.viglink.cron.task.viglink' => true,
            'phpbb.viglink.helper' => true,
            'phpbb.viglink.listener' => true,
            'phpbbmodders.banhammer.admin.controller' => true,
            'phpbbmodders.banhammer.core.bantime' => true,
            'phpbbmodders.banhammer.listener' => true,
            'planetstyles.flightdeck.listener' => true,
            'plupload' => true,
            'profilefields.lang_helper' => true,
            'profilefields.manager' => true,
            'profilefields.type.bool' => true,
            'profilefields.type.date' => true,
            'profilefields.type.dropdown' => true,
            'profilefields.type.int' => true,
            'profilefields.type.string' => true,
            'profilefields.type.text' => true,
            'profilefields.type.url' => true,
            'profilefields.type_collection' => true,
            'request' => true,
            'request_stack' => true,
            'rmcgirr83.printallposts.listener' => true,
            'router' => true,
            'router.listener' => true,
            'routing.chained_resources_locator' => true,
            'routing.delegated_loader' => true,
            'routing.helper' => true,
            'routing.loader.collection' => true,
            'routing.loader.yaml' => true,
            'routing.resolver' => true,
            'routing.resources_locator.collection' => true,
            'routing.resources_locator.default' => true,
            'stevotvr.flair.controller.acp' => true,
            'stevotvr.flair.controller.acp.cats' => true,
            'stevotvr.flair.controller.acp.flair' => true,
            'stevotvr.flair.controller.acp.images' => true,
            'stevotvr.flair.controller.acp.main' => true,
            'stevotvr.flair.controller.legend' => true,
            'stevotvr.flair.controller.mcp.user' => true,
            'stevotvr.flair.controller.ucp.flair' => true,
            'stevotvr.flair.cron.task.main' => true,
            'stevotvr.flair.entity.category' => true,
            'stevotvr.flair.entity.flair' => true,
            'stevotvr.flair.listener' => true,
            'stevotvr.flair.notification.type.flair' => true,
            'stevotvr.flair.operator' => true,
            'stevotvr.flair.operator.category' => true,
            'stevotvr.flair.operator.flair' => true,
            'stevotvr.flair.operator.image' => true,
            'stevotvr.flair.operator.trigger' => true,
            'stevotvr.flair.operator.user' => true,
            'symfony_request' => true,
            'symfony_response_listener' => true,
            'template' => true,
            'template.twig.environment' => true,
            'template.twig.extensions.avatar' => true,
            'template.twig.extensions.collection' => true,
            'template.twig.extensions.config' => true,
            'template.twig.extensions.debug' => true,
            'template.twig.extensions.phpbb' => true,
            'template.twig.extensions.routing' => true,
            'template.twig.extensions.username' => true,
            'template.twig.lexer' => true,
            'template.twig.loader' => true,
            'template_context' => true,
            'text_formatter.acp_utils' => true,
            'text_formatter.cache' => true,
            'text_formatter.data_access' => true,
            'text_formatter.parser' => true,
            'text_formatter.renderer' => true,
            'text_formatter.s9e.bbcode_merger' => true,
            'text_formatter.s9e.factory' => true,
            'text_formatter.s9e.link_helper' => true,
            'text_formatter.s9e.parser' => true,
            'text_formatter.s9e.quote_helper' => true,
            'text_formatter.s9e.renderer' => true,
            'text_formatter.s9e.utils' => true,
            'text_formatter.utils' => true,
            'text_reparser.contact_admin_info' => true,
            'text_reparser.forum_description' => true,
            'text_reparser.forum_rules' => true,
            'text_reparser.group_description' => true,
            'text_reparser.lock' => true,
            'text_reparser.manager' => true,
            'text_reparser.pm_text' => true,
            'text_reparser.poll_option' => true,
            'text_reparser.poll_title' => true,
            'text_reparser.post_text' => true,
            'text_reparser.user_signature' => true,
            'text_reparser_collection' => true,
            'upload_imagesize' => true,
            'user' => true,
            'user_loader' => true,
            'version_helper' => true,
            'viewonline_helper' => true,
            'vse.abbc3.acp_listener' => true,
            'vse.abbc3.acp_manager' => true,
            'vse.abbc3.bbcodes_config' => true,
            'vse.abbc3.bbcodes_display' => true,
            'vse.abbc3.bbcodes_help' => true,
            'vse.abbc3.listener' => true,
            'vse.abbc3.wizard' => true,
        ];
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since Symfony 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    protected function createProxy($class, \Closure $factory)
    {
        return $factory();
    }

    /**
     * Gets the private 'acl.permissions' shared service.
     *
     * @return \phpbb\permissions
     */
    protected function getAcl_PermissionsService()
    {
        return $this->services['acl.permissions'] = new \phpbb\permissions(${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'});
    }

    /**
     * Gets the private 'attachment.delete' service.
     *
     * @return \phpbb\attachment\delete
     */
    protected function getAttachment_DeleteService()
    {
        $a = ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'};

        return new \phpbb\attachment\delete(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, $a, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : ($this->services['filesystem'] = new \phpbb\filesystem\filesystem())) && false ?: '_'}, new \phpbb\attachment\resync($a), './');
    }

    /**
     * Gets the private 'attachment.manager' service.
     *
     * @return \phpbb\attachment\manager
     */
    protected function getAttachment_ManagerService()
    {
        $a = ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'};
        $b = ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'};
        $c = ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'};
        $d = ${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : ($this->services['filesystem'] = new \phpbb\filesystem\filesystem())) && false ?: '_'};
        $e = ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'};

        return new \phpbb\attachment\manager(new \phpbb\attachment\delete($a, $b, $c, $d, new \phpbb\attachment\resync($b), './'), new \phpbb\attachment\resync($b), new \phpbb\attachment\upload(${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['cache']) ? $this->services['cache'] : $this->getCacheService()) && false ?: '_'}, $a, new \phpbb\files\upload($d, ${($_ = isset($this->services['files.factory']) ? $this->services['files.factory'] : ($this->services['files.factory'] = new \phpbb\files\factory($this))) && false ?: '_'}, $e, ${($_ = isset($this->services['php_ini']) ? $this->services['php_ini'] : ($this->services['php_ini'] = new \bantu\IniGetWrapper\IniGetWrapper())) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}), $e, ${($_ = isset($this->services['mimetype.guesser']) ? $this->services['mimetype.guesser'] : $this->getMimetype_GuesserService()) && false ?: '_'}, $c, ${($_ = isset($this->services['plupload']) ? $this->services['plupload'] : $this->getPluploadService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, './'));
    }

    /**
     * Gets the private 'attachment.resync' service.
     *
     * @return \phpbb\attachment\resync
     */
    protected function getAttachment_ResyncService()
    {
        return new \phpbb\attachment\resync(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'});
    }

    /**
     * Gets the private 'attachment.upload' service.
     *
     * @return \phpbb\attachment\upload
     */
    protected function getAttachment_UploadService()
    {
        $a = ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'};

        return new \phpbb\attachment\upload(${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['cache']) ? $this->services['cache'] : $this->getCacheService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, new \phpbb\files\upload(${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : ($this->services['filesystem'] = new \phpbb\filesystem\filesystem())) && false ?: '_'}, ${($_ = isset($this->services['files.factory']) ? $this->services['files.factory'] : ($this->services['files.factory'] = new \phpbb\files\factory($this))) && false ?: '_'}, $a, ${($_ = isset($this->services['php_ini']) ? $this->services['php_ini'] : ($this->services['php_ini'] = new \bantu\IniGetWrapper\IniGetWrapper())) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}), $a, ${($_ = isset($this->services['mimetype.guesser']) ? $this->services['mimetype.guesser'] : $this->getMimetype_GuesserService()) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['plupload']) ? $this->services['plupload'] : $this->getPluploadService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, './');
    }

    /**
     * Gets the private 'auth' shared service.
     *
     * @return \phpbb\auth\auth
     */
    protected function getAuthService()
    {
        return $this->services['auth'] = new \phpbb\auth\auth();
    }

    /**
     * Gets the private 'auth.provider.apache' shared service.
     *
     * @return \phpbb\auth\provider\apache
     */
    protected function getAuth_Provider_ApacheService()
    {
        return $this->services['auth.provider.apache'] = new \phpbb\auth\provider\apache(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, './', 'php');
    }

    /**
     * Gets the private 'auth.provider.db' shared service.
     *
     * @return \phpbb\auth\provider\db
     */
    protected function getAuth_Provider_DbService()
    {
        return $this->services['auth.provider.db'] = new \phpbb\auth\provider\db(${($_ = isset($this->services['captcha.factory']) ? $this->services['captcha.factory'] : $this->getCaptcha_FactoryService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['passwords.manager']) ? $this->services['passwords.manager'] : $this->getPasswords_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, './', 'php');
    }

    /**
     * Gets the private 'auth.provider.ldap' shared service.
     *
     * @return \phpbb\auth\provider\ldap
     */
    protected function getAuth_Provider_LdapService()
    {
        return $this->services['auth.provider.ldap'] = new \phpbb\auth\provider\ldap(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'});
    }

    /**
     * Gets the private 'auth.provider.oauth' shared service.
     *
     * @return \phpbb\auth\provider\oauth\oauth
     */
    protected function getAuth_Provider_OauthService()
    {
        return $this->services['auth.provider.oauth'] = new \phpbb\auth\provider\oauth\oauth(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['auth.provider.db']) ? $this->services['auth.provider.db'] : $this->getAuth_Provider_DbService()) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['auth.provider.oauth.service_collection']) ? $this->services['auth.provider.oauth.service_collection'] : $this->getAuth_Provider_Oauth_ServiceCollectionService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, 'phpbb_oauth_tokens', 'phpbb_oauth_states', 'phpbb_oauth_accounts', 'phpbb_users', './', 'php');
    }

    /**
     * Gets the private 'auth.provider.oauth.service.bitly' shared service.
     *
     * @return \phpbb\auth\provider\oauth\service\bitly
     */
    protected function getAuth_Provider_Oauth_Service_BitlyService()
    {
        return $this->services['auth.provider.oauth.service.bitly'] = new \phpbb\auth\provider\oauth\service\bitly(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'});
    }

    /**
     * Gets the private 'auth.provider.oauth.service.facebook' shared service.
     *
     * @return \phpbb\auth\provider\oauth\service\facebook
     */
    protected function getAuth_Provider_Oauth_Service_FacebookService()
    {
        return $this->services['auth.provider.oauth.service.facebook'] = new \phpbb\auth\provider\oauth\service\facebook(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'});
    }

    /**
     * Gets the private 'auth.provider.oauth.service.google' shared service.
     *
     * @return \phpbb\auth\provider\oauth\service\google
     */
    protected function getAuth_Provider_Oauth_Service_GoogleService()
    {
        return $this->services['auth.provider.oauth.service.google'] = new \phpbb\auth\provider\oauth\service\google(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'});
    }

    /**
     * Gets the private 'auth.provider.oauth.service.twitter' shared service.
     *
     * @return \phpbb\auth\provider\oauth\service\twitter
     */
    protected function getAuth_Provider_Oauth_Service_TwitterService()
    {
        return $this->services['auth.provider.oauth.service.twitter'] = new \phpbb\auth\provider\oauth\service\twitter(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'});
    }

    /**
     * Gets the private 'auth.provider.oauth.service_collection' shared service.
     *
     * @return \phpbb\di\service_collection
     */
    protected function getAuth_Provider_Oauth_ServiceCollectionService()
    {
        $this->services['auth.provider.oauth.service_collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('auth.provider.oauth.service.bitly');
        $instance->add('auth.provider.oauth.service.facebook');
        $instance->add('auth.provider.oauth.service.google');
        $instance->add('auth.provider.oauth.service.twitter');

        return $instance;
    }

    /**
     * Gets the private 'auth.provider_collection' shared service.
     *
     * @return \phpbb\auth\provider_collection
     */
    protected function getAuth_ProviderCollectionService()
    {
        $this->services['auth.provider_collection'] = $instance = new \phpbb\auth\provider_collection($this, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});

        $instance->add('auth.provider.db');
        $instance->add('auth.provider.apache');
        $instance->add('auth.provider.ldap');
        $instance->add('auth.provider.oauth');

        return $instance;
    }

    /**
     * Gets the private 'avatar.driver.gravatar' shared service.
     *
     * @return \phpbb\avatar\driver\gravatar
     */
    protected function getAvatar_Driver_GravatarService()
    {
        $this->services['avatar.driver.gravatar'] = $instance = new \phpbb\avatar\driver\gravatar(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['upload_imagesize']) ? $this->services['upload_imagesize'] : ($this->services['upload_imagesize'] = new \FastImageSize\FastImageSize())) && false ?: '_'}, './', 'php', ${($_ = isset($this->services['path_helper']) ? $this->services['path_helper'] : $this->getPathHelperService()) && false ?: '_'}, ${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \phpbb\cache\driver\file())) && false ?: '_'});

        $instance->set_name('avatar.driver.gravatar');

        return $instance;
    }

    /**
     * Gets the private 'avatar.driver.local' shared service.
     *
     * @return \phpbb\avatar\driver\local
     */
    protected function getAvatar_Driver_LocalService()
    {
        $this->services['avatar.driver.local'] = $instance = new \phpbb\avatar\driver\local(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['upload_imagesize']) ? $this->services['upload_imagesize'] : ($this->services['upload_imagesize'] = new \FastImageSize\FastImageSize())) && false ?: '_'}, './', 'php', ${($_ = isset($this->services['path_helper']) ? $this->services['path_helper'] : $this->getPathHelperService()) && false ?: '_'}, ${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \phpbb\cache\driver\file())) && false ?: '_'});

        $instance->set_name('avatar.driver.local');

        return $instance;
    }

    /**
     * Gets the private 'avatar.driver.remote' shared service.
     *
     * @return \phpbb\avatar\driver\remote
     */
    protected function getAvatar_Driver_RemoteService()
    {
        $this->services['avatar.driver.remote'] = $instance = new \phpbb\avatar\driver\remote(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['upload_imagesize']) ? $this->services['upload_imagesize'] : ($this->services['upload_imagesize'] = new \FastImageSize\FastImageSize())) && false ?: '_'}, './', 'php', ${($_ = isset($this->services['path_helper']) ? $this->services['path_helper'] : $this->getPathHelperService()) && false ?: '_'}, ${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \phpbb\cache\driver\file())) && false ?: '_'});

        $instance->set_name('avatar.driver.remote');

        return $instance;
    }

    /**
     * Gets the private 'avatar.driver.upload' shared service.
     *
     * @return \phpbb\avatar\driver\upload
     */
    protected function getAvatar_Driver_UploadService()
    {
        $this->services['avatar.driver.upload'] = $instance = new \phpbb\avatar\driver\upload(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, './', 'php', ${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : ($this->services['filesystem'] = new \phpbb\filesystem\filesystem())) && false ?: '_'}, ${($_ = isset($this->services['path_helper']) ? $this->services['path_helper'] : $this->getPathHelperService()) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['files.factory']) ? $this->services['files.factory'] : ($this->services['files.factory'] = new \phpbb\files\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \phpbb\cache\driver\file())) && false ?: '_'});

        $instance->set_name('avatar.driver.upload');

        return $instance;
    }

    /**
     * Gets the private 'avatar.driver_collection' shared service.
     *
     * @return \phpbb\di\service_collection
     */
    protected function getAvatar_DriverCollectionService()
    {
        $this->services['avatar.driver_collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('avatar.driver.gravatar');
        $instance->add('avatar.driver.local');
        $instance->add('avatar.driver.remote');
        $instance->add('avatar.driver.upload');

        return $instance;
    }

    /**
     * Gets the private 'avatar.manager' shared service.
     *
     * @return \phpbb\avatar\manager
     */
    protected function getAvatar_ManagerService()
    {
        return $this->services['avatar.manager'] = new \phpbb\avatar\manager(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['avatar.driver_collection']) ? $this->services['avatar.driver_collection'] : $this->getAvatar_DriverCollectionService()) && false ?: '_'});
    }

    /**
     * Gets the private 'cache' shared service.
     *
     * @return \phpbb\cache\service
     */
    protected function getCacheService()
    {
        return $this->services['cache'] = new \phpbb\cache\service(${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \phpbb\cache\driver\file())) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, './', 'php');
    }

    /**
     * Gets the private 'cache.driver' shared service.
     *
     * @return \phpbb\cache\driver\file
     */
    protected function getCache_DriverService()
    {
        return $this->services['cache.driver'] = new \phpbb\cache\driver\file();
    }

    /**
     * Gets the private 'captcha.factory' shared service.
     *
     * @return \phpbb\captcha\factory
     */
    protected function getCaptcha_FactoryService()
    {
        return $this->services['captcha.factory'] = new \phpbb\captcha\factory($this, ${($_ = isset($this->services['captcha.plugins.service_collection']) ? $this->services['captcha.plugins.service_collection'] : $this->getCaptcha_Plugins_ServiceCollectionService()) && false ?: '_'});
    }

    /**
     * Gets the private 'captcha.plugins.service_collection' shared service.
     *
     * @return \phpbb\di\service_collection
     */
    protected function getCaptcha_Plugins_ServiceCollectionService()
    {
        $this->services['captcha.plugins.service_collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('core.captcha.plugins.gd');
        $instance->add('core.captcha.plugins.gd_wave');
        $instance->add('core.captcha.plugins.nogd');
        $instance->add('core.captcha.plugins.qa');
        $instance->add('core.captcha.plugins.recaptcha');
        $instance->add('core.captcha.plugins.recaptcha_v3');

        return $instance;
    }

    /**
     * Gets the private 'class_loader' shared service.
     *
     * @return \phpbb\class_loader
     */
    protected function getClassLoaderService()
    {
        $this->services['class_loader'] = $instance = new \phpbb\class_loader('phpbb\\', './includes/', 'php');

        $instance->register();
        $instance->set_cache(${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \phpbb\cache\driver\file())) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'class_loader.ext' shared service.
     *
     * @return \phpbb\class_loader
     */
    protected function getClassLoader_ExtService()
    {
        $this->services['class_loader.ext'] = $instance = new \phpbb\class_loader('\\', './ext/', 'php');

        $instance->register();
        $instance->set_cache(${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \phpbb\cache\driver\file())) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'config' shared service.
     *
     * @return \phpbb\config\db
     */
    protected function getConfigService()
    {
        return $this->services['config'] = new \phpbb\config\db(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \phpbb\cache\driver\file())) && false ?: '_'}, 'phpbb_config');
    }

    /**
     * Gets the private 'config_text' shared service.
     *
     * @return \phpbb\config\db_text
     */
    protected function getConfigTextService()
    {
        return $this->services['config_text'] = new \phpbb\config\db_text(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, 'phpbb_config_text');
    }

    /**
     * Gets the private 'console.command.cache.purge' shared service.
     *
     * @return \phpbb\console\command\cache\purge
     */
    protected function getConsole_Command_Cache_PurgeService()
    {
        return $this->services['console.command.cache.purge'] = new \phpbb\console\command\cache\purge(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \phpbb\cache\driver\file())) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['log']) ? $this->services['log'] : $this->getLogService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});
    }

    /**
     * Gets the private 'console.command.config.delete' shared service.
     *
     * @return \phpbb\console\command\config\delete
     */
    protected function getConsole_Command_Config_DeleteService()
    {
        return $this->services['console.command.config.delete'] = new \phpbb\console\command\config\delete(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});
    }

    /**
     * Gets the private 'console.command.config.get' shared service.
     *
     * @return \phpbb\console\command\config\get
     */
    protected function getConsole_Command_Config_GetService()
    {
        return $this->services['console.command.config.get'] = new \phpbb\console\command\config\get(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});
    }

    /**
     * Gets the private 'console.command.config.increment' shared service.
     *
     * @return \phpbb\console\command\config\increment
     */
    protected function getConsole_Command_Config_IncrementService()
    {
        return $this->services['console.command.config.increment'] = new \phpbb\console\command\config\increment(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});
    }

    /**
     * Gets the private 'console.command.config.set' shared service.
     *
     * @return \phpbb\console\command\config\set
     */
    protected function getConsole_Command_Config_SetService()
    {
        return $this->services['console.command.config.set'] = new \phpbb\console\command\config\set(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});
    }

    /**
     * Gets the private 'console.command.config.set_atomic' shared service.
     *
     * @return \phpbb\console\command\config\set_atomic
     */
    protected function getConsole_Command_Config_SetAtomicService()
    {
        return $this->services['console.command.config.set_atomic'] = new \phpbb\console\command\config\set_atomic(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});
    }

    /**
     * Gets the private 'console.command.cron.list' shared service.
     *
     * @return \phpbb\console\command\cron\cron_list
     */
    protected function getConsole_Command_Cron_ListService()
    {
        return $this->services['console.command.cron.list'] = new \phpbb\console\command\cron\cron_list(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['cron.manager']) ? $this->services['cron.manager'] : $this->getCron_ManagerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'console.command.cron.run' shared service.
     *
     * @return \phpbb\console\command\cron\run
     */
    protected function getConsole_Command_Cron_RunService()
    {
        return $this->services['console.command.cron.run'] = new \phpbb\console\command\cron\run(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['cron.manager']) ? $this->services['cron.manager'] : $this->getCron_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['cron.lock_db']) ? $this->services['cron.lock_db'] : $this->getCron_LockDbService()) && false ?: '_'});
    }

    /**
     * Gets the private 'console.command.db.list' shared service.
     *
     * @return \phpbb\console\command\db\list_command
     */
    protected function getConsole_Command_Db_ListService()
    {
        return $this->services['console.command.db.list'] = new \phpbb\console\command\db\list_command(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['migrator']) ? $this->services['migrator'] : $this->getMigratorService()) && false ?: '_'}, ${($_ = isset($this->services['ext.manager']) ? $this->services['ext.manager'] : $this->getExt_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['cache']) ? $this->services['cache'] : $this->getCacheService()) && false ?: '_'});
    }

    /**
     * Gets the private 'console.command.db.migrate' shared service.
     *
     * @return \phpbb\console\command\db\migrate
     */
    protected function getConsole_Command_Db_MigrateService()
    {
        return $this->services['console.command.db.migrate'] = new \phpbb\console\command\db\migrate(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['migrator']) ? $this->services['migrator'] : $this->getMigratorService()) && false ?: '_'}, ${($_ = isset($this->services['ext.manager']) ? $this->services['ext.manager'] : $this->getExt_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['cache']) ? $this->services['cache'] : $this->getCacheService()) && false ?: '_'}, ${($_ = isset($this->services['log']) ? $this->services['log'] : $this->getLogService()) && false ?: '_'}, ${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : ($this->services['filesystem'] = new \phpbb\filesystem\filesystem())) && false ?: '_'}, './');
    }

    /**
     * Gets the private 'console.command.db.revert' shared service.
     *
     * @return \phpbb\console\command\db\revert
     */
    protected function getConsole_Command_Db_RevertService()
    {
        return $this->services['console.command.db.revert'] = new \phpbb\console\command\db\revert(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['migrator']) ? $this->services['migrator'] : $this->getMigratorService()) && false ?: '_'}, ${($_ = isset($this->services['ext.manager']) ? $this->services['ext.manager'] : $this->getExt_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['cache']) ? $this->services['cache'] : $this->getCacheService()) && false ?: '_'}, ${($_ = isset($this->services['log']) ? $this->services['log'] : $this->getLogService()) && false ?: '_'}, ${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : ($this->services['filesystem'] = new \phpbb\filesystem\filesystem())) && false ?: '_'}, './');
    }

    /**
     * Gets the private 'console.command.dev.migration_tips' shared service.
     *
     * @return \phpbb\console\command\dev\migration_tips
     */
    protected function getConsole_Command_Dev_MigrationTipsService()
    {
        return $this->services['console.command.dev.migration_tips'] = new \phpbb\console\command\dev\migration_tips(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['ext.manager']) ? $this->services['ext.manager'] : $this->getExt_ManagerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'console.command.extension.disable' shared service.
     *
     * @return \phpbb\console\command\extension\disable
     */
    protected function getConsole_Command_Extension_DisableService()
    {
        return $this->services['console.command.extension.disable'] = new \phpbb\console\command\extension\disable(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['ext.manager']) ? $this->services['ext.manager'] : $this->getExt_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['log']) ? $this->services['log'] : $this->getLogService()) && false ?: '_'}, 'phpbb\\cache\\driver\\file');
    }

    /**
     * Gets the private 'console.command.extension.enable' shared service.
     *
     * @return \phpbb\console\command\extension\enable
     */
    protected function getConsole_Command_Extension_EnableService()
    {
        return $this->services['console.command.extension.enable'] = new \phpbb\console\command\extension\enable(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['ext.manager']) ? $this->services['ext.manager'] : $this->getExt_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['log']) ? $this->services['log'] : $this->getLogService()) && false ?: '_'}, 'phpbb\\cache\\driver\\file');
    }

    /**
     * Gets the private 'console.command.extension.purge' shared service.
     *
     * @return \phpbb\console\command\extension\purge
     */
    protected function getConsole_Command_Extension_PurgeService()
    {
        return $this->services['console.command.extension.purge'] = new \phpbb\console\command\extension\purge(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['ext.manager']) ? $this->services['ext.manager'] : $this->getExt_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['log']) ? $this->services['log'] : $this->getLogService()) && false ?: '_'}, 'phpbb\\cache\\driver\\file');
    }

    /**
     * Gets the private 'console.command.extension.show' shared service.
     *
     * @return \phpbb\console\command\extension\show
     */
    protected function getConsole_Command_Extension_ShowService()
    {
        return $this->services['console.command.extension.show'] = new \phpbb\console\command\extension\show(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['ext.manager']) ? $this->services['ext.manager'] : $this->getExt_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['log']) ? $this->services['log'] : $this->getLogService()) && false ?: '_'}, 'phpbb\\cache\\driver\\file');
    }

    /**
     * Gets the private 'console.command.fixup.fix_left_right_ids' shared service.
     *
     * @return \phpbb\console\command\fixup\fix_left_right_ids
     */
    protected function getConsole_Command_Fixup_FixLeftRightIdsService()
    {
        return $this->services['console.command.fixup.fix_left_right_ids'] = new \phpbb\console\command\fixup\fix_left_right_ids(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \phpbb\cache\driver\file())) && false ?: '_'});
    }

    /**
     * Gets the private 'console.command.fixup.update_hashes' shared service.
     *
     * @return \phpbb\console\command\fixup\update_hashes
     */
    protected function getConsole_Command_Fixup_UpdateHashesService()
    {
        return $this->services['console.command.fixup.update_hashes'] = new \phpbb\console\command\fixup\update_hashes(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['passwords.manager']) ? $this->services['passwords.manager'] : $this->getPasswords_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['passwords.driver_collection']) ? $this->services['passwords.driver_collection'] : $this->getPasswords_DriverCollectionService()) && false ?: '_'}, $this->parameters['passwords.algorithms']);
    }

    /**
     * Gets the private 'console.command.reparser.list' shared service.
     *
     * @return \phpbb\console\command\reparser\list_all
     */
    protected function getConsole_Command_Reparser_ListService()
    {
        return $this->services['console.command.reparser.list'] = new \phpbb\console\command\reparser\list_all(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['text_reparser_collection']) ? $this->services['text_reparser_collection'] : $this->getTextReparserCollectionService()) && false ?: '_'});
    }

    /**
     * Gets the private 'console.command.reparser.reparse' shared service.
     *
     * @return \phpbb\console\command\reparser\reparse
     */
    protected function getConsole_Command_Reparser_ReparseService()
    {
        return $this->services['console.command.reparser.reparse'] = new \phpbb\console\command\reparser\reparse(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['text_reparser.lock']) ? $this->services['text_reparser.lock'] : $this->getTextReparser_LockService()) && false ?: '_'}, ${($_ = isset($this->services['text_reparser.manager']) ? $this->services['text_reparser.manager'] : $this->getTextReparser_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['text_reparser_collection']) ? $this->services['text_reparser_collection'] : $this->getTextReparserCollectionService()) && false ?: '_'});
    }

    /**
     * Gets the private 'console.command.thumbnail.delete' shared service.
     *
     * @return \phpbb\console\command\thumbnail\delete
     */
    protected function getConsole_Command_Thumbnail_DeleteService()
    {
        return $this->services['console.command.thumbnail.delete'] = new \phpbb\console\command\thumbnail\delete(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, './');
    }

    /**
     * Gets the private 'console.command.thumbnail.generate' shared service.
     *
     * @return \phpbb\console\command\thumbnail\generate
     */
    protected function getConsole_Command_Thumbnail_GenerateService()
    {
        return $this->services['console.command.thumbnail.generate'] = new \phpbb\console\command\thumbnail\generate(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['cache']) ? $this->services['cache'] : $this->getCacheService()) && false ?: '_'}, './', 'php');
    }

    /**
     * Gets the private 'console.command.thumbnail.recreate' shared service.
     *
     * @return \phpbb\console\command\thumbnail\recreate
     */
    protected function getConsole_Command_Thumbnail_RecreateService()
    {
        return $this->services['console.command.thumbnail.recreate'] = new \phpbb\console\command\thumbnail\recreate(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'});
    }

    /**
     * Gets the private 'console.command.update.check' shared service.
     *
     * @return \phpbb\console\command\update\check
     */
    protected function getConsole_Command_Update_CheckService()
    {
        return $this->services['console.command.update.check'] = new \phpbb\console\command\update\check(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, $this, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'});
    }

    /**
     * Gets the private 'console.command.user.activate' shared service.
     *
     * @return \phpbb\console\command\user\activate
     */
    protected function getConsole_Command_User_ActivateService()
    {
        return $this->services['console.command.user.activate'] = new \phpbb\console\command\user\activate(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['log']) ? $this->services['log'] : $this->getLogService()) && false ?: '_'}, ${($_ = isset($this->services['notification_manager']) ? $this->services['notification_manager'] : $this->getNotificationManagerService()) && false ?: '_'}, ${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'}, './', 'php');
    }

    /**
     * Gets the private 'console.command.user.add' shared service.
     *
     * @return \phpbb\console\command\user\add
     */
    protected function getConsole_Command_User_AddService()
    {
        return $this->services['console.command.user.add'] = new \phpbb\console\command\user\add(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['passwords.manager']) ? $this->services['passwords.manager'] : $this->getPasswords_ManagerService()) && false ?: '_'}, './', 'php');
    }

    /**
     * Gets the private 'console.command.user.delete' shared service.
     *
     * @return \phpbb\console\command\user\delete
     */
    protected function getConsole_Command_User_DeleteService()
    {
        return $this->services['console.command.user.delete'] = new \phpbb\console\command\user\delete(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['log']) ? $this->services['log'] : $this->getLogService()) && false ?: '_'}, ${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'}, './', 'php');
    }

    /**
     * Gets the private 'console.command.user.reclean' shared service.
     *
     * @return \phpbb\console\command\user\reclean
     */
    protected function getConsole_Command_User_RecleanService()
    {
        return $this->services['console.command.user.reclean'] = new \phpbb\console\command\user\reclean(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'});
    }

    /**
     * Gets the private 'console.command_collection' shared service.
     *
     * @return \phpbb\di\service_collection
     */
    protected function getConsole_CommandCollectionService()
    {
        $this->services['console.command_collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('console.command.cache.purge');
        $instance->add('console.command.config.delete');
        $instance->add('console.command.config.increment');
        $instance->add('console.command.config.get');
        $instance->add('console.command.config.set');
        $instance->add('console.command.config.set_atomic');
        $instance->add('console.command.cron.list');
        $instance->add('console.command.cron.run');
        $instance->add('console.command.db.list');
        $instance->add('console.command.db.migrate');
        $instance->add('console.command.db.revert');
        $instance->add('console.command.dev.migration_tips');
        $instance->add('console.command.extension.disable');
        $instance->add('console.command.extension.enable');
        $instance->add('console.command.extension.purge');
        $instance->add('console.command.extension.show');
        $instance->add('console.command.fixup.update_hashes');
        $instance->add('console.command.fixup.fix_left_right_ids');
        $instance->add('console.command.reparser.list');
        $instance->add('console.command.reparser.reparse');
        $instance->add('console.command.thumbnail.delete');
        $instance->add('console.command.thumbnail.generate');
        $instance->add('console.command.thumbnail.recreate');
        $instance->add('console.command.update.check');
        $instance->add('console.command.user.activate');
        $instance->add('console.command.user.add');
        $instance->add('console.command.user.delete');
        $instance->add('console.command.user.reclean');

        return $instance;
    }

    /**
     * Gets the private 'console.exception_subscriber' shared service.
     *
     * @return \phpbb\console\exception_subscriber
     */
    protected function getConsole_ExceptionSubscriberService()
    {
        return $this->services['console.exception_subscriber'] = new \phpbb\console\exception_subscriber(${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'});
    }

    /**
     * Gets the private 'content.visibility' shared service.
     *
     * @return \phpbb\content_visibility
     */
    protected function getContent_VisibilityService()
    {
        return $this->services['content.visibility'] = new \phpbb\content_visibility(${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, './', 'php', 'phpbb_forums', 'phpbb_posts', 'phpbb_topics', 'phpbb_users');
    }

    /**
     * Gets the private 'controller.helper' shared service.
     *
     * @return \phpbb\controller\helper
     */
    protected function getController_HelperService()
    {
        return $this->services['controller.helper'] = new \phpbb\controller\helper(${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \phpbb\cache\driver\file())) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['cron.manager']) ? $this->services['cron.manager'] : $this->getCron_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['routing.helper']) ? $this->services['routing.helper'] : $this->getRouting_HelperService()) && false ?: '_'}, ${($_ = isset($this->services['symfony_request']) ? $this->services['symfony_request'] : $this->getSymfonyRequestService()) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, './', 'adm/', 'php', false);
    }

    /**
     * Gets the private 'controller.resolver' shared service.
     *
     * @return \phpbb\controller\resolver
     */
    protected function getController_ResolverService()
    {
        return $this->services['controller.resolver'] = new \phpbb\controller\resolver($this, './', ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'});
    }

    /**
     * Gets the private 'core.captcha.plugins.gd' service.
     *
     * @return \phpbb\captcha\plugins\gd
     */
    protected function getCore_Captcha_Plugins_GdService()
    {
        $instance = new \phpbb\captcha\plugins\gd();

        $instance->set_name('core.captcha.plugins.gd');

        return $instance;
    }

    /**
     * Gets the private 'core.captcha.plugins.gd_wave' service.
     *
     * @return \phpbb\captcha\plugins\gd_wave
     */
    protected function getCore_Captcha_Plugins_GdWaveService()
    {
        $instance = new \phpbb\captcha\plugins\gd_wave();

        $instance->set_name('core.captcha.plugins.gd_wave');

        return $instance;
    }

    /**
     * Gets the private 'core.captcha.plugins.nogd' service.
     *
     * @return \phpbb\captcha\plugins\nogd
     */
    protected function getCore_Captcha_Plugins_NogdService()
    {
        $instance = new \phpbb\captcha\plugins\nogd();

        $instance->set_name('core.captcha.plugins.nogd');

        return $instance;
    }

    /**
     * Gets the private 'core.captcha.plugins.qa' service.
     *
     * @return \phpbb\captcha\plugins\qa
     */
    protected function getCore_Captcha_Plugins_QaService()
    {
        $instance = new \phpbb\captcha\plugins\qa('phpbb_captcha_questions', 'phpbb_captcha_answers', 'phpbb_qa_confirm');

        $instance->set_name('core.captcha.plugins.qa');

        return $instance;
    }

    /**
     * Gets the private 'core.captcha.plugins.recaptcha' service.
     *
     * @return \phpbb\captcha\plugins\recaptcha
     */
    protected function getCore_Captcha_Plugins_RecaptchaService()
    {
        $instance = new \phpbb\captcha\plugins\recaptcha();

        $instance->set_name('core.captcha.plugins.recaptcha');

        return $instance;
    }

    /**
     * Gets the private 'core.captcha.plugins.recaptcha_v3' service.
     *
     * @return \phpbb\captcha\plugins\recaptcha_v3
     */
    protected function getCore_Captcha_Plugins_RecaptchaV3Service()
    {
        $instance = new \phpbb\captcha\plugins\recaptcha_v3();

        $instance->set_name('core.captcha.plugins.recaptcha_v3');

        return $instance;
    }

    /**
     * Gets the private 'cron.controller' shared service.
     *
     * @return \phpbb\cron\controller\cron
     */
    protected function getCron_ControllerService()
    {
        return $this->services['cron.controller'] = new \phpbb\cron\controller\cron();
    }

    /**
     * Gets the private 'cron.event_listener' shared service.
     *
     * @return \phpbb\cron\event\cron_runner_listener
     */
    protected function getCron_EventListenerService()
    {
        return $this->services['cron.event_listener'] = new \phpbb\cron\event\cron_runner_listener(${($_ = isset($this->services['cron.lock_db']) ? $this->services['cron.lock_db'] : $this->getCron_LockDbService()) && false ?: '_'}, ${($_ = isset($this->services['cron.manager']) ? $this->services['cron.manager'] : $this->getCron_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'});
    }

    /**
     * Gets the private 'cron.lock_db' shared service.
     *
     * @return \phpbb\lock\db
     */
    protected function getCron_LockDbService()
    {
        return $this->services['cron.lock_db'] = new \phpbb\lock\db('cron_lock', ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'});
    }

    /**
     * Gets the private 'cron.manager' shared service.
     *
     * @return \phpbb\cron\manager
     */
    protected function getCron_ManagerService()
    {
        return $this->services['cron.manager'] = new \phpbb\cron\manager($this, ${($_ = isset($this->services['routing.helper']) ? $this->services['routing.helper'] : $this->getRouting_HelperService()) && false ?: '_'}, './', 'php');
    }

    /**
     * Gets the private 'cron.task.core.prune_all_forums' shared service.
     *
     * @return \phpbb\cron\task\core\prune_all_forums
     */
    protected function getCron_Task_Core_PruneAllForumsService()
    {
        $this->services['cron.task.core.prune_all_forums'] = $instance = new \phpbb\cron\task\core\prune_all_forums('./', 'php', ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'});

        $instance->set_name('cron.task.core.prune_all_forums');

        return $instance;
    }

    /**
     * Gets the private 'cron.task.core.prune_forum' shared service.
     *
     * @return \phpbb\cron\task\core\prune_forum
     */
    protected function getCron_Task_Core_PruneForumService()
    {
        $this->services['cron.task.core.prune_forum'] = $instance = new \phpbb\cron\task\core\prune_forum('./', 'php', ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'});

        $instance->set_name('cron.task.core.prune_forum');

        return $instance;
    }

    /**
     * Gets the private 'cron.task.core.prune_notifications' shared service.
     *
     * @return \phpbb\cron\task\core\prune_notifications
     */
    protected function getCron_Task_Core_PruneNotificationsService()
    {
        $this->services['cron.task.core.prune_notifications'] = $instance = new \phpbb\cron\task\core\prune_notifications(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['notification_manager']) ? $this->services['notification_manager'] : $this->getNotificationManagerService()) && false ?: '_'});

        $instance->set_name('cron.task.core.prune_notifications');

        return $instance;
    }

    /**
     * Gets the private 'cron.task.core.prune_shadow_topics' shared service.
     *
     * @return \phpbb\cron\task\core\prune_shadow_topics
     */
    protected function getCron_Task_Core_PruneShadowTopicsService()
    {
        $this->services['cron.task.core.prune_shadow_topics'] = $instance = new \phpbb\cron\task\core\prune_shadow_topics('./', 'php', ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['log']) ? $this->services['log'] : $this->getLogService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'});

        $instance->set_name('cron.task.core.prune_shadow_topics');

        return $instance;
    }

    /**
     * Gets the private 'cron.task.core.queue' shared service.
     *
     * @return \phpbb\cron\task\core\queue
     */
    protected function getCron_Task_Core_QueueService()
    {
        $this->services['cron.task.core.queue'] = $instance = new \phpbb\cron\task\core\queue('./', 'php', ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, './cache/production/');

        $instance->set_name('cron.task.core.queue');

        return $instance;
    }

    /**
     * Gets the private 'cron.task.core.tidy_cache' shared service.
     *
     * @return \phpbb\cron\task\core\tidy_cache
     */
    protected function getCron_Task_Core_TidyCacheService()
    {
        $this->services['cron.task.core.tidy_cache'] = $instance = new \phpbb\cron\task\core\tidy_cache(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \phpbb\cache\driver\file())) && false ?: '_'});

        $instance->set_name('cron.task.core.tidy_cache');

        return $instance;
    }

    /**
     * Gets the private 'cron.task.core.tidy_database' shared service.
     *
     * @return \phpbb\cron\task\core\tidy_database
     */
    protected function getCron_Task_Core_TidyDatabaseService()
    {
        $this->services['cron.task.core.tidy_database'] = $instance = new \phpbb\cron\task\core\tidy_database('./', 'php', ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});

        $instance->set_name('cron.task.core.tidy_database');

        return $instance;
    }

    /**
     * Gets the private 'cron.task.core.tidy_plupload' shared service.
     *
     * @return \phpbb\cron\task\core\tidy_plupload
     */
    protected function getCron_Task_Core_TidyPluploadService()
    {
        $this->services['cron.task.core.tidy_plupload'] = $instance = new \phpbb\cron\task\core\tidy_plupload('./', ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['log']) ? $this->services['log'] : $this->getLogService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'});

        $instance->set_name('cron.task.core.tidy_plupload');

        return $instance;
    }

    /**
     * Gets the private 'cron.task.core.tidy_search' shared service.
     *
     * @return \phpbb\cron\task\core\tidy_search
     */
    protected function getCron_Task_Core_TidySearchService()
    {
        $this->services['cron.task.core.tidy_search'] = $instance = new \phpbb\cron\task\core\tidy_search('./', 'php', ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'});

        $instance->set_name('cron.task.core.tidy_search');

        return $instance;
    }

    /**
     * Gets the private 'cron.task.core.tidy_sessions' shared service.
     *
     * @return \phpbb\cron\task\core\tidy_sessions
     */
    protected function getCron_Task_Core_TidySessionsService()
    {
        $this->services['cron.task.core.tidy_sessions'] = $instance = new \phpbb\cron\task\core\tidy_sessions(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'});

        $instance->set_name('cron.task.core.tidy_sessions');

        return $instance;
    }

    /**
     * Gets the private 'cron.task.core.tidy_warnings' shared service.
     *
     * @return \phpbb\cron\task\core\tidy_warnings
     */
    protected function getCron_Task_Core_TidyWarningsService()
    {
        $this->services['cron.task.core.tidy_warnings'] = $instance = new \phpbb\cron\task\core\tidy_warnings('./', 'php', ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});

        $instance->set_name('cron.task.core.tidy_warnings');

        return $instance;
    }

    /**
     * Gets the private 'cron.task.core.update_hashes' shared service.
     *
     * @return \phpbb\cron\task\core\update_hashes
     */
    protected function getCron_Task_Core_UpdateHashesService()
    {
        $this->services['cron.task.core.update_hashes'] = $instance = new \phpbb\cron\task\core\update_hashes(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['passwords.update.lock']) ? $this->services['passwords.update.lock'] : $this->getPasswords_Update_LockService()) && false ?: '_'}, ${($_ = isset($this->services['passwords.manager']) ? $this->services['passwords.manager'] : $this->getPasswords_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['passwords.driver_collection']) ? $this->services['passwords.driver_collection'] : $this->getPasswords_DriverCollectionService()) && false ?: '_'}, $this->parameters['passwords.algorithms']);

        $instance->set_name('cron.task.core.update_hashes');

        return $instance;
    }

    /**
     * Gets the private 'cron.task.text_reparser.pm_text' shared service.
     *
     * @return \phpbb\cron\task\text_reparser\reparser
     */
    protected function getCron_Task_TextReparser_PmTextService()
    {
        $this->services['cron.task.text_reparser.pm_text'] = $instance = new \phpbb\cron\task\text_reparser\reparser(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['config_text']) ? $this->services['config_text'] : $this->getConfigTextService()) && false ?: '_'}, ${($_ = isset($this->services['text_reparser.lock']) ? $this->services['text_reparser.lock'] : $this->getTextReparser_LockService()) && false ?: '_'}, ${($_ = isset($this->services['text_reparser.manager']) ? $this->services['text_reparser.manager'] : $this->getTextReparser_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['text_reparser_collection']) ? $this->services['text_reparser_collection'] : $this->getTextReparserCollectionService()) && false ?: '_'});

        $instance->set_name('cron.task.text_reparser.pm_text');
        $instance->set_reparser('text_reparser.pm_text');

        return $instance;
    }

    /**
     * Gets the private 'cron.task.text_reparser.poll_option' shared service.
     *
     * @return \phpbb\cron\task\text_reparser\reparser
     */
    protected function getCron_Task_TextReparser_PollOptionService()
    {
        $this->services['cron.task.text_reparser.poll_option'] = $instance = new \phpbb\cron\task\text_reparser\reparser(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['config_text']) ? $this->services['config_text'] : $this->getConfigTextService()) && false ?: '_'}, ${($_ = isset($this->services['text_reparser.lock']) ? $this->services['text_reparser.lock'] : $this->getTextReparser_LockService()) && false ?: '_'}, ${($_ = isset($this->services['text_reparser.manager']) ? $this->services['text_reparser.manager'] : $this->getTextReparser_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['text_reparser_collection']) ? $this->services['text_reparser_collection'] : $this->getTextReparserCollectionService()) && false ?: '_'});

        $instance->set_name('cron.task.text_reparser.poll_option');
        $instance->set_reparser('text_reparser.poll_option');

        return $instance;
    }

    /**
     * Gets the private 'cron.task.text_reparser.poll_title' shared service.
     *
     * @return \phpbb\cron\task\text_reparser\reparser
     */
    protected function getCron_Task_TextReparser_PollTitleService()
    {
        $this->services['cron.task.text_reparser.poll_title'] = $instance = new \phpbb\cron\task\text_reparser\reparser(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['config_text']) ? $this->services['config_text'] : $this->getConfigTextService()) && false ?: '_'}, ${($_ = isset($this->services['text_reparser.lock']) ? $this->services['text_reparser.lock'] : $this->getTextReparser_LockService()) && false ?: '_'}, ${($_ = isset($this->services['text_reparser.manager']) ? $this->services['text_reparser.manager'] : $this->getTextReparser_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['text_reparser_collection']) ? $this->services['text_reparser_collection'] : $this->getTextReparserCollectionService()) && false ?: '_'});

        $instance->set_name('cron.task.text_reparser.poll_title');
        $instance->set_reparser('text_reparser.poll_title');

        return $instance;
    }

    /**
     * Gets the private 'cron.task.text_reparser.post_text' shared service.
     *
     * @return \phpbb\cron\task\text_reparser\reparser
     */
    protected function getCron_Task_TextReparser_PostTextService()
    {
        $this->services['cron.task.text_reparser.post_text'] = $instance = new \phpbb\cron\task\text_reparser\reparser(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['config_text']) ? $this->services['config_text'] : $this->getConfigTextService()) && false ?: '_'}, ${($_ = isset($this->services['text_reparser.lock']) ? $this->services['text_reparser.lock'] : $this->getTextReparser_LockService()) && false ?: '_'}, ${($_ = isset($this->services['text_reparser.manager']) ? $this->services['text_reparser.manager'] : $this->getTextReparser_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['text_reparser_collection']) ? $this->services['text_reparser_collection'] : $this->getTextReparserCollectionService()) && false ?: '_'});

        $instance->set_name('cron.task.text_reparser.post_text');
        $instance->set_reparser('text_reparser.post_text');

        return $instance;
    }

    /**
     * Gets the private 'cron.task.text_reparser.user_signature' shared service.
     *
     * @return \phpbb\cron\task\text_reparser\reparser
     */
    protected function getCron_Task_TextReparser_UserSignatureService()
    {
        $this->services['cron.task.text_reparser.user_signature'] = $instance = new \phpbb\cron\task\text_reparser\reparser(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['config_text']) ? $this->services['config_text'] : $this->getConfigTextService()) && false ?: '_'}, ${($_ = isset($this->services['text_reparser.lock']) ? $this->services['text_reparser.lock'] : $this->getTextReparser_LockService()) && false ?: '_'}, ${($_ = isset($this->services['text_reparser.manager']) ? $this->services['text_reparser.manager'] : $this->getTextReparser_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['text_reparser_collection']) ? $this->services['text_reparser_collection'] : $this->getTextReparserCollectionService()) && false ?: '_'});

        $instance->set_name('cron.task.text_reparser.user_signature');
        $instance->set_reparser('text_reparser.user_signature');

        return $instance;
    }

    /**
     * Gets the private 'cron.task_collection' shared service.
     *
     * @return \phpbb\di\service_collection
     */
    protected function getCron_TaskCollectionService()
    {
        $this->services['cron.task_collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('cron.task.core.prune_all_forums');
        $instance->add('cron.task.core.prune_forum');
        $instance->add('cron.task.core.prune_shadow_topics');
        $instance->add('cron.task.core.prune_notifications');
        $instance->add('cron.task.core.queue');
        $instance->add('cron.task.core.tidy_cache');
        $instance->add('cron.task.core.tidy_database');
        $instance->add('cron.task.core.tidy_plupload');
        $instance->add('cron.task.core.tidy_search');
        $instance->add('cron.task.core.tidy_sessions');
        $instance->add('cron.task.core.tidy_warnings');
        $instance->add('cron.task.text_reparser.pm_text');
        $instance->add('cron.task.text_reparser.poll_option');
        $instance->add('cron.task.text_reparser.poll_title');
        $instance->add('cron.task.text_reparser.post_text');
        $instance->add('cron.task.text_reparser.user_signature');
        $instance->add('cron.task.core.update_hashes');
        $instance->add('phpbb.autogroups.cron.task.autogroups_check');
        $instance->add('phpbb.viglink.cron.task.viglink');
        $instance->add('stevotvr.flair.cron.task.main');

        return $instance;
    }

    /**
     * Gets the private 'dbal.conn' shared service.
     *
     * @return \phpbb\db\driver\factory
     */
    protected function getDbal_ConnService()
    {
        return $this->services['dbal.conn'] = new \phpbb\db\driver\factory($this);
    }

    /**
     * Gets the private 'dbal.extractor' shared service.
     *
     * @return \phpbb\db\extractor\extractor_interface
     */
    protected function getDbal_ExtractorService()
    {
        return $this->services['dbal.extractor'] = ${($_ = isset($this->services['dbal.extractor.factory']) ? $this->services['dbal.extractor.factory'] : ($this->services['dbal.extractor.factory'] = new \phpbb\db\extractor\factory(${($_ = isset($this->services['dbal.conn.driver']) ? $this->services['dbal.conn.driver'] : $this->get('dbal.conn.driver', 1)) && false ?: '_'}, $this))) && false ?: '_'}->get();
    }

    /**
     * Gets the private 'dbal.extractor.extractors.mssql_extractor' service.
     *
     * @return \phpbb\db\extractor\mssql_extractor
     */
    protected function getDbal_Extractor_Extractors_MssqlExtractorService()
    {
        return new \phpbb\db\extractor\mssql_extractor('./', ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn.driver']) ? $this->services['dbal.conn.driver'] : $this->get('dbal.conn.driver', 1)) && false ?: '_'});
    }

    /**
     * Gets the private 'dbal.extractor.extractors.mysql_extractor' service.
     *
     * @return \phpbb\db\extractor\mysql_extractor
     */
    protected function getDbal_Extractor_Extractors_MysqlExtractorService()
    {
        return new \phpbb\db\extractor\mysql_extractor('./', ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn.driver']) ? $this->services['dbal.conn.driver'] : $this->get('dbal.conn.driver', 1)) && false ?: '_'});
    }

    /**
     * Gets the private 'dbal.extractor.extractors.oracle_extractor' service.
     *
     * @return \phpbb\db\extractor\oracle_extractor
     */
    protected function getDbal_Extractor_Extractors_OracleExtractorService()
    {
        return new \phpbb\db\extractor\oracle_extractor('./', ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn.driver']) ? $this->services['dbal.conn.driver'] : $this->get('dbal.conn.driver', 1)) && false ?: '_'});
    }

    /**
     * Gets the private 'dbal.extractor.extractors.postgres_extractor' service.
     *
     * @return \phpbb\db\extractor\postgres_extractor
     */
    protected function getDbal_Extractor_Extractors_PostgresExtractorService()
    {
        return new \phpbb\db\extractor\postgres_extractor('./', ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn.driver']) ? $this->services['dbal.conn.driver'] : $this->get('dbal.conn.driver', 1)) && false ?: '_'});
    }

    /**
     * Gets the private 'dbal.extractor.extractors.sqlite3_extractor' service.
     *
     * @return \phpbb\db\extractor\sqlite3_extractor
     */
    protected function getDbal_Extractor_Extractors_Sqlite3ExtractorService()
    {
        return new \phpbb\db\extractor\sqlite3_extractor('./', ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn.driver']) ? $this->services['dbal.conn.driver'] : $this->get('dbal.conn.driver', 1)) && false ?: '_'});
    }

    /**
     * Gets the private 'dbal.extractor.factory' shared service.
     *
     * @return \phpbb\db\extractor\factory
     */
    protected function getDbal_Extractor_FactoryService()
    {
        return $this->services['dbal.extractor.factory'] = new \phpbb\db\extractor\factory(${($_ = isset($this->services['dbal.conn.driver']) ? $this->services['dbal.conn.driver'] : $this->get('dbal.conn.driver', 1)) && false ?: '_'}, $this);
    }

    /**
     * Gets the private 'dbal.tools' shared service.
     *
     * @return \phpbb\db\tools\tools_interface
     */
    protected function getDbal_ToolsService()
    {
        return $this->services['dbal.tools'] = ${($_ = isset($this->services['dbal.tools.factory']) ? $this->services['dbal.tools.factory'] : ($this->services['dbal.tools.factory'] = new \phpbb\db\tools\factory())) && false ?: '_'}->get(${($_ = isset($this->services['dbal.conn.driver']) ? $this->services['dbal.conn.driver'] : $this->get('dbal.conn.driver', 1)) && false ?: '_'});
    }

    /**
     * Gets the private 'dbal.tools.factory' shared service.
     *
     * @return \phpbb\db\tools\factory
     */
    protected function getDbal_Tools_FactoryService()
    {
        return $this->services['dbal.tools.factory'] = new \phpbb\db\tools\factory();
    }

    /**
     * Gets the private 'dispatcher' shared service.
     *
     * @return \phpbb\event\dispatcher
     */
    protected function getDispatcherService()
    {
        $this->services['dispatcher'] = $instance = new \phpbb\event\dispatcher($this);

        $instance->addListener('core.auth_login_session_create_before', [0 => function () {
            return ${($_ = isset($this->services['paul999.tfa.listener']) ? $this->services['paul999.tfa.listener'] : $this->getPaul999_Tfa_ListenerService()) && false ?: '_'};
        }, 1 => 'auth_login_session_create_before'], 0);
        $instance->addListener('core.user_setup_after', [0 => function () {
            return ${($_ = isset($this->services['paul999.tfa.listener']) ? $this->services['paul999.tfa.listener'] : $this->getPaul999_Tfa_ListenerService()) && false ?: '_'};
        }, 1 => 'user_setup_after'], 0);
        $instance->addListener('core.permissions', [0 => function () {
            return ${($_ = isset($this->services['paul999.tfa.listener']) ? $this->services['paul999.tfa.listener'] : $this->getPaul999_Tfa_ListenerService()) && false ?: '_'};
        }, 1 => 'add_permission'], 0);
        $instance->addListener('core.delete_group_after', [0 => function () {
            return ${($_ = isset($this->services['phpbb.autogroups.listener']) ? $this->services['phpbb.autogroups.listener'] : $this->getPhpbb_Autogroups_ListenerService()) && false ?: '_'};
        }, 1 => 'delete_group_rules'], 0);
        $instance->addListener('core.user_setup', [0 => function () {
            return ${($_ = isset($this->services['phpbb.autogroups.listener']) ? $this->services['phpbb.autogroups.listener'] : $this->getPhpbb_Autogroups_ListenerService()) && false ?: '_'};
        }, 1 => 'load_language_on_setup'], 0);
        $instance->addListener('core.submit_post_end', [0 => function () {
            return ${($_ = isset($this->services['phpbb.autogroups.listener']) ? $this->services['phpbb.autogroups.listener'] : $this->getPhpbb_Autogroups_ListenerService()) && false ?: '_'};
        }, 1 => 'submit_post_check'], 0);
        $instance->addListener('core.delete_posts_after', [0 => function () {
            return ${($_ = isset($this->services['phpbb.autogroups.listener']) ? $this->services['phpbb.autogroups.listener'] : $this->getPhpbb_Autogroups_ListenerService()) && false ?: '_'};
        }, 1 => 'delete_post_check'], 0);
        $instance->addListener('core.approve_posts_after', [0 => function () {
            return ${($_ = isset($this->services['phpbb.autogroups.listener']) ? $this->services['phpbb.autogroups.listener'] : $this->getPhpbb_Autogroups_ListenerService()) && false ?: '_'};
        }, 1 => 'approve_post_check'], 0);
        $instance->addListener('core.mcp_warn_post_after', [0 => function () {
            return ${($_ = isset($this->services['phpbb.autogroups.listener']) ? $this->services['phpbb.autogroups.listener'] : $this->getPhpbb_Autogroups_ListenerService()) && false ?: '_'};
        }, 1 => 'add_warning_check'], 0);
        $instance->addListener('core.mcp_warn_user_after', [0 => function () {
            return ${($_ = isset($this->services['phpbb.autogroups.listener']) ? $this->services['phpbb.autogroups.listener'] : $this->getPhpbb_Autogroups_ListenerService()) && false ?: '_'};
        }, 1 => 'add_warning_check'], 0);
        $instance->addListener('core.session_create_after', [0 => function () {
            return ${($_ = isset($this->services['phpbb.autogroups.listener']) ? $this->services['phpbb.autogroups.listener'] : $this->getPhpbb_Autogroups_ListenerService()) && false ?: '_'};
        }, 1 => 'last_visit_check'], 0);
        $instance->addListener('core.user_add_after', [0 => function () {
            return ${($_ = isset($this->services['phpbb.autogroups.listener']) ? $this->services['phpbb.autogroups.listener'] : $this->getPhpbb_Autogroups_ListenerService()) && false ?: '_'};
        }, 1 => 'membership_check'], 0);
        $instance->addListener('core.user_active_flip_after', [0 => function () {
            return ${($_ = isset($this->services['phpbb.autogroups.listener']) ? $this->services['phpbb.autogroups.listener'] : $this->getPhpbb_Autogroups_ListenerService()) && false ?: '_'};
        }, 1 => 'membership_check'], 0);
        $instance->addListener('core.page_header_after', [0 => function () {
            return ${($_ = isset($this->services['phpbb.boardannouncements.listener']) ? $this->services['phpbb.boardannouncements.listener'] : $this->getPhpbb_Boardannouncements_ListenerService()) && false ?: '_'};
        }, 1 => 'display_board_announcements'], 0);
        $instance->addListener('core.user_setup', [0 => function () {
            return ${($_ = isset($this->services['phpbb.collapsiblecategories.listener']) ? $this->services['phpbb.collapsiblecategories.listener'] : $this->getPhpbb_Collapsiblecategories_ListenerService()) && false ?: '_'};
        }, 1 => 'load_language_on_setup'], 0);
        $instance->addListener('core.display_forums_modify_category_template_vars', [0 => function () {
            return ${($_ = isset($this->services['phpbb.collapsiblecategories.listener']) ? $this->services['phpbb.collapsiblecategories.listener'] : $this->getPhpbb_Collapsiblecategories_ListenerService()) && false ?: '_'};
        }, 1 => 'show_collapsible_categories'], 0);
        $instance->addListener('core.display_forums_modify_template_vars', [0 => function () {
            return ${($_ = isset($this->services['phpbb.collapsiblecategories.listener']) ? $this->services['phpbb.collapsiblecategories.listener'] : $this->getPhpbb_Collapsiblecategories_ListenerService()) && false ?: '_'};
        }, 1 => 'show_collapsible_categories'], 0);
        $instance->addListener('core.posting_modify_template_vars', [0 => function () {
            return ${($_ = isset($this->services['phpbb.topicprefixes.listener']) ? $this->services['phpbb.topicprefixes.listener'] : $this->getPhpbb_Topicprefixes_ListenerService()) && false ?: '_'};
        }, 1 => 'add_to_posting_form'], 0);
        $instance->addListener('core.posting_modify_submit_post_before', [0 => function () {
            return ${($_ = isset($this->services['phpbb.topicprefixes.listener']) ? $this->services['phpbb.topicprefixes.listener'] : $this->getPhpbb_Topicprefixes_ListenerService()) && false ?: '_'};
        }, 1 => 'submit_prefix_data'], 0);
        $instance->addListener('core.submit_post_modify_sql_data', [0 => function () {
            return ${($_ = isset($this->services['phpbb.topicprefixes.listener']) ? $this->services['phpbb.topicprefixes.listener'] : $this->getPhpbb_Topicprefixes_ListenerService()) && false ?: '_'};
        }, 1 => 'save_prefix_to_topic'], 0);
        $instance->addListener('core.viewtopic_post_row_after', [0 => function () {
            return ${($_ = isset($this->services['phpbb.viglink.listener']) ? $this->services['phpbb.viglink.listener'] : $this->getPhpbb_Viglink_ListenerService()) && false ?: '_'};
        }, 1 => 'display_viglink'], 0);
        $instance->addListener('core.acp_main_notice', [0 => function () {
            return ${($_ = isset($this->services['phpbb.viglink.acp_listener']) ? $this->services['phpbb.viglink.acp_listener'] : $this->getPhpbb_Viglink_AcpListenerService()) && false ?: '_'};
        }, 1 => 'set_viglink_services'], 0);
        $instance->addListener('core.acp_help_phpbb_submit_before', [0 => function () {
            return ${($_ = isset($this->services['phpbb.viglink.acp_listener']) ? $this->services['phpbb.viglink.acp_listener'] : $this->getPhpbb_Viglink_AcpListenerService()) && false ?: '_'};
        }, 1 => 'update_viglink_settings'], 0);
        $instance->addListener('core.memberlist_view_profile', [0 => function () {
            return ${($_ = isset($this->services['phpbbmodders.banhammer.listener']) ? $this->services['phpbbmodders.banhammer.listener'] : $this->getPhpbbmodders_Banhammer_ListenerService()) && false ?: '_'};
        }, 1 => 'do_ban_hammer_stuff'], 0);
        $instance->addListener('core.session_set_custom_ban', [0 => function () {
            return ${($_ = isset($this->services['phpbbmodders.banhammer.listener']) ? $this->services['phpbbmodders.banhammer.listener'] : $this->getPhpbbmodders_Banhammer_ListenerService()) && false ?: '_'};
        }, 1 => 'undo_bh_group'], 0);
        $instance->addListener('core.page_header', [0 => function () {
            return ${($_ = isset($this->services['planetstyles.flightdeck.listener']) ? $this->services['planetstyles.flightdeck.listener'] : $this->getPlanetstyles_Flightdeck_ListenerService()) && false ?: '_'};
        }, 1 => 'load_style_settings_data'], 0);
        $instance->addListener('core.acp_extensions_run_action_after', [0 => function () {
            return ${($_ = isset($this->services['rmcgirr83.printallposts.listener']) ? $this->services['rmcgirr83.printallposts.listener'] : $this->getRmcgirr83_Printallposts_ListenerService()) && false ?: '_'};
        }, 1 => 'acp_extensions_run_action_after'], 0);
        $instance->addListener('core.viewtopic_before_f_read_check', [0 => function () {
            return ${($_ = isset($this->services['rmcgirr83.printallposts.listener']) ? $this->services['rmcgirr83.printallposts.listener'] : $this->getRmcgirr83_Printallposts_ListenerService()) && false ?: '_'};
        }, 1 => 'viewtopic_before_f_read_check'], 0);
        $instance->addListener('core.viewtopic_assign_template_vars_before', [0 => function () {
            return ${($_ = isset($this->services['rmcgirr83.printallposts.listener']) ? $this->services['rmcgirr83.printallposts.listener'] : $this->getRmcgirr83_Printallposts_ListenerService()) && false ?: '_'};
        }, 1 => 'viewtopic_assign_template_vars_before'], 0);
        $instance->addListener('core.viewtopic_highlight_modify', [0 => function () {
            return ${($_ = isset($this->services['rmcgirr83.printallposts.listener']) ? $this->services['rmcgirr83.printallposts.listener'] : $this->getRmcgirr83_Printallposts_ListenerService()) && false ?: '_'};
        }, 1 => 'viewtopic_highlight_modify'], 0);
        $instance->addListener('core.viewtopic_modify_page_title', [0 => function () {
            return ${($_ = isset($this->services['rmcgirr83.printallposts.listener']) ? $this->services['rmcgirr83.printallposts.listener'] : $this->getRmcgirr83_Printallposts_ListenerService()) && false ?: '_'};
        }, 1 => 'viewtopic_modify_page_title'], 0);
        $instance->addListener('core.permissions', [0 => function () {
            return ${($_ = isset($this->services['stevotvr.flair.listener']) ? $this->services['stevotvr.flair.listener'] : $this->getStevotvr_Flair_ListenerService()) && false ?: '_'};
        }, 1 => 'permissions'], 0);
        $instance->addListener('core.user_setup', [0 => function () {
            return ${($_ = isset($this->services['stevotvr.flair.listener']) ? $this->services['stevotvr.flair.listener'] : $this->getStevotvr_Flair_ListenerService()) && false ?: '_'};
        }, 1 => 'user_setup'], 0);
        $instance->addListener('core.memberlist_view_profile', [0 => function () {
            return ${($_ = isset($this->services['stevotvr.flair.listener']) ? $this->services['stevotvr.flair.listener'] : $this->getStevotvr_Flair_ListenerService()) && false ?: '_'};
        }, 1 => 'memberlist_view_profile'], 0);
        $instance->addListener('core.submit_post_end', [0 => function () {
            return ${($_ = isset($this->services['stevotvr.flair.listener']) ? $this->services['stevotvr.flair.listener'] : $this->getStevotvr_Flair_ListenerService()) && false ?: '_'};
        }, 1 => 'submit_post_end'], 0);
        $instance->addListener('core.viewtopic_modify_post_data', [0 => function () {
            return ${($_ = isset($this->services['stevotvr.flair.listener']) ? $this->services['stevotvr.flair.listener'] : $this->getStevotvr_Flair_ListenerService()) && false ?: '_'};
        }, 1 => 'viewtopic_modify_post_data'], 0);
        $instance->addListener('core.viewtopic_post_row_after', [0 => function () {
            return ${($_ = isset($this->services['stevotvr.flair.listener']) ? $this->services['stevotvr.flair.listener'] : $this->getStevotvr_Flair_ListenerService()) && false ?: '_'};
        }, 1 => 'viewtopic_post_row_after'], 0);
        $instance->addListener('core.delete_group_after', [0 => function () {
            return ${($_ = isset($this->services['stevotvr.flair.listener']) ? $this->services['stevotvr.flair.listener'] : $this->getStevotvr_Flair_ListenerService()) && false ?: '_'};
        }, 1 => 'delete_group_after'], 0);
        $instance->addListener('core.delete_user_after', [0 => function () {
            return ${($_ = isset($this->services['stevotvr.flair.listener']) ? $this->services['stevotvr.flair.listener'] : $this->getStevotvr_Flair_ListenerService()) && false ?: '_'};
        }, 1 => 'delete_user_after'], 0);
        $instance->addListener('core.user_setup', [0 => function () {
            return ${($_ = isset($this->services['vse.abbc3.listener']) ? $this->services['vse.abbc3.listener'] : $this->getVse_Abbc3_ListenerService()) && false ?: '_'};
        }, 1 => 'load_language_on_setup'], 0);
        $instance->addListener('core.display_custom_bbcodes', [0 => function () {
            return ${($_ = isset($this->services['vse.abbc3.listener']) ? $this->services['vse.abbc3.listener'] : $this->getVse_Abbc3_ListenerService()) && false ?: '_'};
        }, 1 => 'setup_custom_bbcodes'], 0);
        $instance->addListener('core.display_custom_bbcodes_modify_sql', [0 => function () {
            return ${($_ = isset($this->services['vse.abbc3.listener']) ? $this->services['vse.abbc3.listener'] : $this->getVse_Abbc3_ListenerService()) && false ?: '_'};
        }, 1 => 'custom_bbcode_modify_sql'], 0);
        $instance->addListener('core.display_custom_bbcodes_modify_row', [0 => function () {
            return ${($_ = isset($this->services['vse.abbc3.listener']) ? $this->services['vse.abbc3.listener'] : $this->getVse_Abbc3_ListenerService()) && false ?: '_'};
        }, 1 => 'display_custom_bbcodes'], 0);
        $instance->addListener('core.text_formatter_s9e_parser_setup', [0 => function () {
            return ${($_ = isset($this->services['vse.abbc3.listener']) ? $this->services['vse.abbc3.listener'] : $this->getVse_Abbc3_ListenerService()) && false ?: '_'};
        }, 1 => 'allow_custom_bbcodes'], 0);
        $instance->addListener('core.text_formatter_s9e_configure_after', [0 => function () {
            return ${($_ = isset($this->services['vse.abbc3.listener']) ? $this->services['vse.abbc3.listener'] : $this->getVse_Abbc3_ListenerService()) && false ?: '_'};
        }, 1 => 'configure_bbcodes'], -1);
        $instance->addListener('core.help_manager_add_block_after', [0 => function () {
            return ${($_ = isset($this->services['vse.abbc3.listener']) ? $this->services['vse.abbc3.listener'] : $this->getVse_Abbc3_ListenerService()) && false ?: '_'};
        }, 1 => 'add_bbcode_faq'], 0);
        $instance->addListener('core.viewtopic_modify_quick_reply_template_vars', [0 => function () {
            return ${($_ = isset($this->services['vse.abbc3.listener']) ? $this->services['vse.abbc3.listener'] : $this->getVse_Abbc3_ListenerService()) && false ?: '_'};
        }, 1 => 'set_quick_reply'], 0);
        $instance->addListener('core.viewtopic_modify_page_title', [0 => function () {
            return ${($_ = isset($this->services['vse.abbc3.listener']) ? $this->services['vse.abbc3.listener'] : $this->getVse_Abbc3_ListenerService()) && false ?: '_'};
        }, 1 => 'add_to_quickreply'], 0);
        $instance->addListener('core.acp_bbcodes_display_form', [0 => function () {
            return ${($_ = isset($this->services['vse.abbc3.acp_listener']) ? $this->services['vse.abbc3.acp_listener'] : $this->getVse_Abbc3_AcpListenerService()) && false ?: '_'};
        }, 1 => 'acp_bbcodes_custom_sorting'], 0);
        $instance->addListener('core.acp_bbcodes_display_bbcodes', [0 => function () {
            return ${($_ = isset($this->services['vse.abbc3.acp_listener']) ? $this->services['vse.abbc3.acp_listener'] : $this->getVse_Abbc3_AcpListenerService()) && false ?: '_'};
        }, 1 => 'acp_bbcodes_custom_sorting_buttons'], 0);
        $instance->addListener('core.acp_bbcodes_modify_create', [0 => function () {
            return ${($_ = isset($this->services['vse.abbc3.acp_listener']) ? $this->services['vse.abbc3.acp_listener'] : $this->getVse_Abbc3_AcpListenerService()) && false ?: '_'};
        }, 1 => 'acp_bbcodes_modify_create'], 0);
        $instance->addListener('core.acp_bbcodes_edit_add', [0 => function () {
            return ${($_ = isset($this->services['vse.abbc3.acp_listener']) ? $this->services['vse.abbc3.acp_listener'] : $this->getVse_Abbc3_AcpListenerService()) && false ?: '_'};
        }, 1 => 'acp_bbcodes_group_select_box'], 0);
        $instance->addListener('core.text_formatter_s9e_configure_after', [0 => function () {
            return ${($_ = isset($this->services['vse.abbc3.acp_listener']) ? $this->services['vse.abbc3.acp_listener'] : $this->getVse_Abbc3_AcpListenerService()) && false ?: '_'};
        }, 1 => 's9e_store_bbcode_groups'], 0);
        $instance->addListener('console.error', [0 => function () {
            return ${($_ = isset($this->services['console.exception_subscriber']) ? $this->services['console.exception_subscriber'] : $this->getConsole_ExceptionSubscriberService()) && false ?: '_'};
        }, 1 => 'on_error'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ${($_ = isset($this->services['cron.event_listener']) ? $this->services['cron.event_listener'] : $this->getCron_EventListenerService()) && false ?: '_'};
        }, 1 => 'on_kernel_terminate'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ${($_ = isset($this->services['kernel_exception_subscriber']) ? $this->services['kernel_exception_subscriber'] : $this->getKernelExceptionSubscriberService()) && false ?: '_'};
        }, 1 => 'on_kernel_exception'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ${($_ = isset($this->services['kernel_terminate_subscriber']) ? $this->services['kernel_terminate_subscriber'] : ($this->services['kernel_terminate_subscriber'] = new \phpbb\event\kernel_terminate_subscriber())) && false ?: '_'};
        }, 1 => 'on_kernel_terminate'], -9223372036854775808);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['symfony_response_listener']) ? $this->services['symfony_response_listener'] : ($this->services['symfony_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8'))) && false ?: '_'};
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['router.listener']) ? $this->services['router.listener'] : $this->getRouter_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 32);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ${($_ = isset($this->services['router.listener']) ? $this->services['router.listener'] : $this->getRouter_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ${($_ = isset($this->services['router.listener']) ? $this->services['router.listener'] : $this->getRouter_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelException'], -64);

        return $instance;
    }

    /**
     * Gets the private 'ext.manager' shared service.
     *
     * @return \phpbb\extension\manager
     */
    protected function getExt_ManagerService()
    {
        return $this->services['ext.manager'] = new \phpbb\extension\manager($this, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : ($this->services['filesystem'] = new \phpbb\filesystem\filesystem())) && false ?: '_'}, 'phpbb_ext', './', 'php', ${($_ = isset($this->services['cache']) ? $this->services['cache'] : $this->getCacheService()) && false ?: '_'});
    }

    /**
     * Gets the private 'feed.forum' service.
     *
     * @return \phpbb\feed\forum
     */
    protected function getFeed_ForumService()
    {
        return new \phpbb\feed\forum(${($_ = isset($this->services['feed.helper']) ? $this->services['feed.helper'] : $this->getFeed_HelperService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \phpbb\cache\driver\file())) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['content.visibility']) ? $this->services['content.visibility'] : $this->getContent_VisibilityService()) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, 'php');
    }

    /**
     * Gets the private 'feed.forums' service.
     *
     * @return \phpbb\feed\forums
     */
    protected function getFeed_ForumsService()
    {
        return new \phpbb\feed\forums(${($_ = isset($this->services['feed.helper']) ? $this->services['feed.helper'] : $this->getFeed_HelperService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \phpbb\cache\driver\file())) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['content.visibility']) ? $this->services['content.visibility'] : $this->getContent_VisibilityService()) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, 'php');
    }

    /**
     * Gets the private 'feed.helper' shared service.
     *
     * @return \phpbb\feed\helper
     */
    protected function getFeed_HelperService()
    {
        return $this->services['feed.helper'] = new \phpbb\feed\helper(${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, $this, ${($_ = isset($this->services['path_helper']) ? $this->services['path_helper'] : $this->getPathHelperService()) && false ?: '_'}, ${($_ = isset($this->services['text_formatter.s9e.renderer']) ? $this->services['text_formatter.s9e.renderer'] : $this->getTextFormatter_S9e_RendererService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'});
    }

    /**
     * Gets the private 'feed.news' service.
     *
     * @return \phpbb\feed\news
     */
    protected function getFeed_NewsService()
    {
        return new \phpbb\feed\news(${($_ = isset($this->services['feed.helper']) ? $this->services['feed.helper'] : $this->getFeed_HelperService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \phpbb\cache\driver\file())) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['content.visibility']) ? $this->services['content.visibility'] : $this->getContent_VisibilityService()) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, 'php');
    }

    /**
     * Gets the private 'feed.overall' service.
     *
     * @return \phpbb\feed\overall
     */
    protected function getFeed_OverallService()
    {
        return new \phpbb\feed\overall(${($_ = isset($this->services['feed.helper']) ? $this->services['feed.helper'] : $this->getFeed_HelperService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \phpbb\cache\driver\file())) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['content.visibility']) ? $this->services['content.visibility'] : $this->getContent_VisibilityService()) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, 'php');
    }

    /**
     * Gets the private 'feed.quote_helper' shared service.
     *
     * @return \phpbb\feed\quote_helper
     */
    protected function getFeed_QuoteHelperService()
    {
        return $this->services['feed.quote_helper'] = new \phpbb\feed\quote_helper(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, './', 'php');
    }

    /**
     * Gets the private 'feed.topic' service.
     *
     * @return \phpbb\feed\topic
     */
    protected function getFeed_TopicService()
    {
        return new \phpbb\feed\topic(${($_ = isset($this->services['feed.helper']) ? $this->services['feed.helper'] : $this->getFeed_HelperService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \phpbb\cache\driver\file())) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['content.visibility']) ? $this->services['content.visibility'] : $this->getContent_VisibilityService()) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, 'php');
    }

    /**
     * Gets the private 'feed.topics' service.
     *
     * @return \phpbb\feed\topics
     */
    protected function getFeed_TopicsService()
    {
        return new \phpbb\feed\topics(${($_ = isset($this->services['feed.helper']) ? $this->services['feed.helper'] : $this->getFeed_HelperService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \phpbb\cache\driver\file())) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['content.visibility']) ? $this->services['content.visibility'] : $this->getContent_VisibilityService()) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, 'php');
    }

    /**
     * Gets the private 'feed.topics_active' service.
     *
     * @return \phpbb\feed\topics_active
     */
    protected function getFeed_TopicsActiveService()
    {
        return new \phpbb\feed\topics_active(${($_ = isset($this->services['feed.helper']) ? $this->services['feed.helper'] : $this->getFeed_HelperService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \phpbb\cache\driver\file())) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['content.visibility']) ? $this->services['content.visibility'] : $this->getContent_VisibilityService()) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, 'php');
    }

    /**
     * Gets the private 'file_downloader' shared service.
     *
     * @return \phpbb\file_downloader
     */
    protected function getFileDownloaderService()
    {
        return $this->services['file_downloader'] = new \phpbb\file_downloader();
    }

    /**
     * Gets the private 'file_locator' shared service.
     *
     * @return \phpbb\routing\file_locator
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \phpbb\routing\file_locator(${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : ($this->services['filesystem'] = new \phpbb\filesystem\filesystem())) && false ?: '_'}, './');
    }

    /**
     * Gets the private 'files.factory' shared service.
     *
     * @return \phpbb\files\factory
     */
    protected function getFiles_FactoryService()
    {
        return $this->services['files.factory'] = new \phpbb\files\factory($this);
    }

    /**
     * Gets the private 'files.filespec' service.
     *
     * @return \phpbb\files\filespec
     */
    protected function getFiles_FilespecService()
    {
        return new \phpbb\files\filespec(${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : ($this->services['filesystem'] = new \phpbb\filesystem\filesystem())) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['php_ini']) ? $this->services['php_ini'] : ($this->services['php_ini'] = new \bantu\IniGetWrapper\IniGetWrapper())) && false ?: '_'}, ${($_ = isset($this->services['upload_imagesize']) ? $this->services['upload_imagesize'] : ($this->services['upload_imagesize'] = new \FastImageSize\FastImageSize())) && false ?: '_'}, './', ${($_ = isset($this->services['mimetype.guesser']) ? $this->services['mimetype.guesser'] : $this->getMimetype_GuesserService()) && false ?: '_'}, ${($_ = isset($this->services['plupload']) ? $this->services['plupload'] : $this->getPluploadService()) && false ?: '_'});
    }

    /**
     * Gets the private 'files.types.form' service.
     *
     * @return \phpbb\files\types\form
     */
    protected function getFiles_Types_FormService()
    {
        return new \phpbb\files\types\form(${($_ = isset($this->services['files.factory']) ? $this->services['files.factory'] : ($this->services['files.factory'] = new \phpbb\files\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['php_ini']) ? $this->services['php_ini'] : ($this->services['php_ini'] = new \bantu\IniGetWrapper\IniGetWrapper())) && false ?: '_'}, ${($_ = isset($this->services['plupload']) ? $this->services['plupload'] : $this->getPluploadService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'});
    }

    /**
     * Gets the private 'files.types.local' service.
     *
     * @return \phpbb\files\types\local
     */
    protected function getFiles_Types_LocalService()
    {
        return new \phpbb\files\types\local(${($_ = isset($this->services['files.factory']) ? $this->services['files.factory'] : ($this->services['files.factory'] = new \phpbb\files\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['php_ini']) ? $this->services['php_ini'] : ($this->services['php_ini'] = new \bantu\IniGetWrapper\IniGetWrapper())) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'});
    }

    /**
     * Gets the private 'files.types.remote' service.
     *
     * @return \phpbb\files\types\remote
     */
    protected function getFiles_Types_RemoteService()
    {
        return new \phpbb\files\types\remote(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['files.factory']) ? $this->services['files.factory'] : ($this->services['files.factory'] = new \phpbb\files\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['php_ini']) ? $this->services['php_ini'] : ($this->services['php_ini'] = new \bantu\IniGetWrapper\IniGetWrapper())) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, './');
    }

    /**
     * Gets the private 'files.upload' service.
     *
     * @return \phpbb\files\upload
     */
    protected function getFiles_UploadService()
    {
        return new \phpbb\files\upload(${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : ($this->services['filesystem'] = new \phpbb\filesystem\filesystem())) && false ?: '_'}, ${($_ = isset($this->services['files.factory']) ? $this->services['files.factory'] : ($this->services['files.factory'] = new \phpbb\files\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['php_ini']) ? $this->services['php_ini'] : ($this->services['php_ini'] = new \bantu\IniGetWrapper\IniGetWrapper())) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'});
    }

    /**
     * Gets the private 'filesystem' shared service.
     *
     * @return \phpbb\filesystem\filesystem
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \phpbb\filesystem\filesystem();
    }

    /**
     * Gets the private 'group_helper' shared service.
     *
     * @return \phpbb\group\helper
     */
    protected function getGroupHelperService()
    {
        return $this->services['group_helper'] = new \phpbb\group\helper(${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['cache']) ? $this->services['cache'] : $this->getCacheService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['path_helper']) ? $this->services['path_helper'] : $this->getPathHelperService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'});
    }

    /**
     * Gets the private 'groupposition.legend' shared service.
     *
     * @return \phpbb\groupposition\legend
     */
    protected function getGroupposition_LegendService()
    {
        return $this->services['groupposition.legend'] = new \phpbb\groupposition\legend(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'});
    }

    /**
     * Gets the private 'groupposition.teampage' shared service.
     *
     * @return \phpbb\groupposition\teampage
     */
    protected function getGroupposition_TeampageService()
    {
        return $this->services['groupposition.teampage'] = new \phpbb\groupposition\teampage(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \phpbb\cache\driver\file())) && false ?: '_'});
    }

    /**
     * Gets the private 'hook_finder' shared service.
     *
     * @return \phpbb\hook\finder
     */
    protected function getHookFinderService()
    {
        return $this->services['hook_finder'] = new \phpbb\hook\finder('./', 'php', ${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \phpbb\cache\driver\file())) && false ?: '_'});
    }

    /**
     * Gets the private 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['controller.resolver']) ? $this->services['controller.resolver'] : $this->getController_ResolverService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'});
    }

    /**
     * Gets the private 'kernel_exception_subscriber' shared service.
     *
     * @return \phpbb\event\kernel_exception_subscriber
     */
    protected function getKernelExceptionSubscriberService()
    {
        return $this->services['kernel_exception_subscriber'] = new \phpbb\event\kernel_exception_subscriber(${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, false);
    }

    /**
     * Gets the private 'kernel_terminate_subscriber' shared service.
     *
     * @return \phpbb\event\kernel_terminate_subscriber
     */
    protected function getKernelTerminateSubscriberService()
    {
        return $this->services['kernel_terminate_subscriber'] = new \phpbb\event\kernel_terminate_subscriber();
    }

    /**
     * Gets the private 'language' shared service.
     *
     * @return \phpbb\language\language
     */
    protected function getLanguageService()
    {
        return $this->services['language'] = new \phpbb\language\language(${($_ = isset($this->services['language.loader']) ? $this->services['language.loader'] : $this->getLanguage_LoaderService()) && false ?: '_'});
    }

    /**
     * Gets the private 'language.helper.language_file' shared service.
     *
     * @return \phpbb\language\language_file_helper
     */
    protected function getLanguage_Helper_LanguageFileService()
    {
        return $this->services['language.helper.language_file'] = new \phpbb\language\language_file_helper('./');
    }

    /**
     * Gets the private 'language.loader' shared service.
     *
     * @return \phpbb\language\language_file_loader
     */
    protected function getLanguage_LoaderService()
    {
        $this->services['language.loader'] = $instance = new \phpbb\language\language_file_loader('./', 'php');

        $instance->set_extension_manager(${($_ = isset($this->services['ext.manager']) ? $this->services['ext.manager'] : $this->getExt_ManagerService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'log' shared service.
     *
     * @return \phpbb\log\log
     */
    protected function getLogService()
    {
        return $this->services['log'] = new \phpbb\log\log(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, './', 'adm/', 'php', 'phpbb_log');
    }

    /**
     * Gets the private 'message.form.admin' shared service.
     *
     * @return \phpbb\message\admin_form
     */
    protected function getMessage_Form_AdminService()
    {
        return $this->services['message.form.admin'] = new \phpbb\message\admin_form(${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['config_text']) ? $this->services['config_text'] : $this->getConfigTextService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, './', 'php');
    }

    /**
     * Gets the private 'message.form.topic' shared service.
     *
     * @return \phpbb\message\topic_form
     */
    protected function getMessage_Form_TopicService()
    {
        return $this->services['message.form.topic'] = new \phpbb\message\topic_form(${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, './', 'php');
    }

    /**
     * Gets the private 'message.form.user' shared service.
     *
     * @return \phpbb\message\user_form
     */
    protected function getMessage_Form_UserService()
    {
        return $this->services['message.form.user'] = new \phpbb\message\user_form(${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, './', 'php');
    }

    /**
     * Gets the private 'migrator' shared service.
     *
     * @return \phpbb\db\migrator
     */
    protected function getMigratorService()
    {
        return $this->services['migrator'] = new \phpbb\db\migrator($this, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['dbal.tools']) ? $this->services['dbal.tools'] : $this->getDbal_ToolsService()) && false ?: '_'}, 'phpbb_migrations', './', 'php', 'phpbb_', ${($_ = isset($this->services['migrator.tool_collection']) ? $this->services['migrator.tool_collection'] : $this->getMigrator_ToolCollectionService()) && false ?: '_'}, ${($_ = isset($this->services['migrator.helper']) ? $this->services['migrator.helper'] : ($this->services['migrator.helper'] = new \phpbb\db\migration\helper())) && false ?: '_'});
    }

    /**
     * Gets the private 'migrator.helper' shared service.
     *
     * @return \phpbb\db\migration\helper
     */
    protected function getMigrator_HelperService()
    {
        return $this->services['migrator.helper'] = new \phpbb\db\migration\helper();
    }

    /**
     * Gets the private 'migrator.tool.config' shared service.
     *
     * @return \phpbb\db\migration\tool\config
     */
    protected function getMigrator_Tool_ConfigService()
    {
        return $this->services['migrator.tool.config'] = new \phpbb\db\migration\tool\config(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});
    }

    /**
     * Gets the private 'migrator.tool.config_text' shared service.
     *
     * @return \phpbb\db\migration\tool\config_text
     */
    protected function getMigrator_Tool_ConfigTextService()
    {
        return $this->services['migrator.tool.config_text'] = new \phpbb\db\migration\tool\config_text(${($_ = isset($this->services['config_text']) ? $this->services['config_text'] : $this->getConfigTextService()) && false ?: '_'});
    }

    /**
     * Gets the private 'migrator.tool.module' shared service.
     *
     * @return \phpbb\db\migration\tool\module
     */
    protected function getMigrator_Tool_ModuleService()
    {
        return $this->services['migrator.tool.module'] = new \phpbb\db\migration\tool\module(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['cache']) ? $this->services['cache'] : $this->getCacheService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['module.manager']) ? $this->services['module.manager'] : $this->getModule_ManagerService()) && false ?: '_'}, './', 'php', 'phpbb_modules');
    }

    /**
     * Gets the private 'migrator.tool.permission' shared service.
     *
     * @return \phpbb\db\migration\tool\permission
     */
    protected function getMigrator_Tool_PermissionService()
    {
        return $this->services['migrator.tool.permission'] = new \phpbb\db\migration\tool\permission(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['cache']) ? $this->services['cache'] : $this->getCacheService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, './', 'php');
    }

    /**
     * Gets the private 'migrator.tool_collection' shared service.
     *
     * @return \phpbb\di\service_collection
     */
    protected function getMigrator_ToolCollectionService()
    {
        $this->services['migrator.tool_collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('migrator.tool.config');
        $instance->add('migrator.tool.config_text');
        $instance->add('migrator.tool.module');
        $instance->add('migrator.tool.permission');

        return $instance;
    }

    /**
     * Gets the private 'mimetype.content_guesser' shared service.
     *
     * @return \phpbb\mimetype\content_guesser
     */
    protected function getMimetype_ContentGuesserService()
    {
        $this->services['mimetype.content_guesser'] = $instance = new \phpbb\mimetype\content_guesser();

        $instance->set_priority(-1);

        return $instance;
    }

    /**
     * Gets the private 'mimetype.extension_guesser' shared service.
     *
     * @return \phpbb\mimetype\extension_guesser
     */
    protected function getMimetype_ExtensionGuesserService()
    {
        $this->services['mimetype.extension_guesser'] = $instance = new \phpbb\mimetype\extension_guesser();

        $instance->set_priority(-2);

        return $instance;
    }

    /**
     * Gets the private 'mimetype.filebinary_mimetype_guesser' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\File\MimeType\FileBinaryMimeTypeGuesser
     */
    protected function getMimetype_FilebinaryMimetypeGuesserService()
    {
        return $this->services['mimetype.filebinary_mimetype_guesser'] = new \Symfony\Component\HttpFoundation\File\MimeType\FileBinaryMimeTypeGuesser();
    }

    /**
     * Gets the private 'mimetype.fileinfo_mimetype_guesser' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\File\MimeType\FileinfoMimeTypeGuesser
     */
    protected function getMimetype_FileinfoMimetypeGuesserService()
    {
        return $this->services['mimetype.fileinfo_mimetype_guesser'] = new \Symfony\Component\HttpFoundation\File\MimeType\FileinfoMimeTypeGuesser();
    }

    /**
     * Gets the private 'mimetype.guesser' shared service.
     *
     * @return \phpbb\mimetype\guesser
     */
    protected function getMimetype_GuesserService()
    {
        return $this->services['mimetype.guesser'] = new \phpbb\mimetype\guesser(${($_ = isset($this->services['mimetype.guesser_collection']) ? $this->services['mimetype.guesser_collection'] : $this->getMimetype_GuesserCollectionService()) && false ?: '_'});
    }

    /**
     * Gets the private 'mimetype.guesser_collection' shared service.
     *
     * @return \phpbb\di\service_collection
     */
    protected function getMimetype_GuesserCollectionService()
    {
        $this->services['mimetype.guesser_collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('mimetype.fileinfo_mimetype_guesser');
        $instance->add('mimetype.filebinary_mimetype_guesser');
        $instance->add('mimetype.content_guesser');
        $instance->add('mimetype.extension_guesser');

        return $instance;
    }

    /**
     * Gets the private 'module.manager' shared service.
     *
     * @return \phpbb\module\module_manager
     */
    protected function getModule_ManagerService()
    {
        return $this->services['module.manager'] = new \phpbb\module\module_manager(${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \phpbb\cache\driver\file())) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['ext.manager']) ? $this->services['ext.manager'] : $this->getExt_ManagerService()) && false ?: '_'}, 'phpbb_modules', './', 'php');
    }

    /**
     * Gets the private 'notification.method.board' service.
     *
     * @return \phpbb\notification\method\board
     */
    protected function getNotification_Method_BoardService()
    {
        return new \phpbb\notification\method\board(${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \phpbb\cache\driver\file())) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, 'phpbb_notification_types', 'phpbb_notifications');
    }

    /**
     * Gets the private 'notification.method.email' service.
     *
     * @return \phpbb\notification\method\email
     */
    protected function getNotification_Method_EmailService()
    {
        return new \phpbb\notification\method\email(${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, './', 'php', 'phpbb_notification_emails');
    }

    /**
     * Gets the private 'notification.method.jabber' service.
     *
     * @return \phpbb\notification\method\jabber
     */
    protected function getNotification_Method_JabberService()
    {
        return new \phpbb\notification\method\jabber(${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, './', 'php');
    }

    /**
     * Gets the private 'notification.method_collection' shared service.
     *
     * @return \phpbb\di\service_collection
     */
    protected function getNotification_MethodCollectionService()
    {
        $this->services['notification.method_collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('notification.method.board');
        $instance->add('notification.method.email');
        $instance->add('notification.method.jabber');

        return $instance;
    }

    /**
     * Gets the private 'notification.type.admin_activate_user' service.
     *
     * @return \phpbb\notification\type\admin_activate_user
     */
    protected function getNotification_Type_AdminActivateUserService()
    {
        $instance = new \phpbb\notification\type\admin_activate_user(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, './', 'php', 'phpbb_user_notifications');

        $instance->set_user_loader(${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'});
        $instance->set_config(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'notification.type.approve_post' service.
     *
     * @return \phpbb\notification\type\approve_post
     */
    protected function getNotification_Type_ApprovePostService()
    {
        $instance = new \phpbb\notification\type\approve_post(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, './', 'php', 'phpbb_user_notifications');

        $instance->set_user_loader(${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'});
        $instance->set_config(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'notification.type.approve_topic' service.
     *
     * @return \phpbb\notification\type\approve_topic
     */
    protected function getNotification_Type_ApproveTopicService()
    {
        $instance = new \phpbb\notification\type\approve_topic(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, './', 'php', 'phpbb_user_notifications');

        $instance->set_user_loader(${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'});
        $instance->set_config(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'notification.type.bookmark' service.
     *
     * @return \phpbb\notification\type\bookmark
     */
    protected function getNotification_Type_BookmarkService()
    {
        $instance = new \phpbb\notification\type\bookmark(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, './', 'php', 'phpbb_user_notifications');

        $instance->set_user_loader(${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'});
        $instance->set_config(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'notification.type.disapprove_post' service.
     *
     * @return \phpbb\notification\type\disapprove_post
     */
    protected function getNotification_Type_DisapprovePostService()
    {
        $instance = new \phpbb\notification\type\disapprove_post(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, './', 'php', 'phpbb_user_notifications');

        $instance->set_user_loader(${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'});
        $instance->set_config(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'notification.type.disapprove_topic' service.
     *
     * @return \phpbb\notification\type\disapprove_topic
     */
    protected function getNotification_Type_DisapproveTopicService()
    {
        $instance = new \phpbb\notification\type\disapprove_topic(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, './', 'php', 'phpbb_user_notifications');

        $instance->set_user_loader(${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'});
        $instance->set_config(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'notification.type.forum' service.
     *
     * @return \phpbb\notification\type\forum
     */
    protected function getNotification_Type_ForumService()
    {
        $instance = new \phpbb\notification\type\forum(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, './', 'php', 'phpbb_user_notifications');

        $a = ${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'};
        $b = ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'};

        $instance->set_user_loader($a);
        $instance->set_config($b);
        $instance->set_user_loader($a);
        $instance->set_config($b);

        return $instance;
    }

    /**
     * Gets the private 'notification.type.group_request' service.
     *
     * @return \phpbb\notification\type\group_request
     */
    protected function getNotification_Type_GroupRequestService()
    {
        $instance = new \phpbb\notification\type\group_request(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, './', 'php', 'phpbb_user_notifications');

        $instance->set_user_loader(${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'notification.type.group_request_approved' service.
     *
     * @return \phpbb\notification\type\group_request_approved
     */
    protected function getNotification_Type_GroupRequestApprovedService()
    {
        return new \phpbb\notification\type\group_request_approved(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, './', 'php', 'phpbb_user_notifications');
    }

    /**
     * Gets the private 'notification.type.pm' service.
     *
     * @return \phpbb\notification\type\pm
     */
    protected function getNotification_Type_PmService()
    {
        $instance = new \phpbb\notification\type\pm(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, './', 'php', 'phpbb_user_notifications');

        $instance->set_user_loader(${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'});
        $instance->set_config(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'notification.type.post' service.
     *
     * @return \phpbb\notification\type\post
     */
    protected function getNotification_Type_PostService()
    {
        $instance = new \phpbb\notification\type\post(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, './', 'php', 'phpbb_user_notifications');

        $instance->set_user_loader(${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'});
        $instance->set_config(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'notification.type.post_in_queue' service.
     *
     * @return \phpbb\notification\type\post_in_queue
     */
    protected function getNotification_Type_PostInQueueService()
    {
        $instance = new \phpbb\notification\type\post_in_queue(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, './', 'php', 'phpbb_user_notifications');

        $instance->set_user_loader(${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'});
        $instance->set_config(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'notification.type.quote' service.
     *
     * @return \phpbb\notification\type\quote
     */
    protected function getNotification_Type_QuoteService()
    {
        $instance = new \phpbb\notification\type\quote(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, './', 'php', 'phpbb_user_notifications');

        $instance->set_user_loader(${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'});
        $instance->set_config(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});
        $instance->set_utils(${($_ = isset($this->services['text_formatter.s9e.utils']) ? $this->services['text_formatter.s9e.utils'] : ($this->services['text_formatter.s9e.utils'] = new \phpbb\textformatter\s9e\utils())) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'notification.type.report_pm' service.
     *
     * @return \phpbb\notification\type\report_pm
     */
    protected function getNotification_Type_ReportPmService()
    {
        $instance = new \phpbb\notification\type\report_pm(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, './', 'php', 'phpbb_user_notifications');

        $instance->set_user_loader(${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'});
        $instance->set_config(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'notification.type.report_pm_closed' service.
     *
     * @return \phpbb\notification\type\report_pm_closed
     */
    protected function getNotification_Type_ReportPmClosedService()
    {
        $instance = new \phpbb\notification\type\report_pm_closed(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, './', 'php', 'phpbb_user_notifications');

        $instance->set_user_loader(${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'});
        $instance->set_config(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'notification.type.report_post' service.
     *
     * @return \phpbb\notification\type\report_post
     */
    protected function getNotification_Type_ReportPostService()
    {
        $instance = new \phpbb\notification\type\report_post(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, './', 'php', 'phpbb_user_notifications');

        $instance->set_user_loader(${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'});
        $instance->set_config(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'notification.type.report_post_closed' service.
     *
     * @return \phpbb\notification\type\report_post_closed
     */
    protected function getNotification_Type_ReportPostClosedService()
    {
        $instance = new \phpbb\notification\type\report_post_closed(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, './', 'php', 'phpbb_user_notifications');

        $instance->set_user_loader(${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'});
        $instance->set_config(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'notification.type.topic' service.
     *
     * @return \phpbb\notification\type\topic
     */
    protected function getNotification_Type_TopicService()
    {
        $instance = new \phpbb\notification\type\topic(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, './', 'php', 'phpbb_user_notifications');

        $instance->set_user_loader(${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'});
        $instance->set_config(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'notification.type.topic_in_queue' service.
     *
     * @return \phpbb\notification\type\topic_in_queue
     */
    protected function getNotification_Type_TopicInQueueService()
    {
        $instance = new \phpbb\notification\type\topic_in_queue(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, './', 'php', 'phpbb_user_notifications');

        $instance->set_user_loader(${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'});
        $instance->set_config(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'notification.type_collection' shared service.
     *
     * @return \phpbb\di\service_collection
     */
    protected function getNotification_TypeCollectionService()
    {
        $this->services['notification.type_collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('notification.type.admin_activate_user');
        $instance->add('notification.type.approve_post');
        $instance->add('notification.type.approve_topic');
        $instance->add('notification.type.bookmark');
        $instance->add('notification.type.disapprove_post');
        $instance->add('notification.type.disapprove_topic');
        $instance->add('notification.type.group_request');
        $instance->add('notification.type.group_request_approved');
        $instance->add('notification.type.pm');
        $instance->add('notification.type.post');
        $instance->add('notification.type.post_in_queue');
        $instance->add('notification.type.quote');
        $instance->add('notification.type.report_pm');
        $instance->add('notification.type.report_pm_closed');
        $instance->add('notification.type.report_post');
        $instance->add('notification.type.report_post_closed');
        $instance->add('notification.type.topic');
        $instance->add('notification.type.topic_in_queue');
        $instance->add('notification.type.forum');
        $instance->add('phpbb.autogroups.notification.type.group_added');
        $instance->add('phpbb.autogroups.notification.type.group_removed');
        $instance->add('stevotvr.flair.notification.type.flair');

        return $instance;
    }

    /**
     * Gets the private 'notification_manager' shared service.
     *
     * @return \phpbb\notification\manager
     */
    protected function getNotificationManagerService()
    {
        return $this->services['notification_manager'] = new \phpbb\notification\manager(${($_ = isset($this->services['notification.type_collection']) ? $this->services['notification.type_collection'] : $this->getNotification_TypeCollectionService()) && false ?: '_'}, ${($_ = isset($this->services['notification.method_collection']) ? $this->services['notification.method_collection'] : $this->getNotification_MethodCollectionService()) && false ?: '_'}, $this, ${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['cache']) ? $this->services['cache'] : $this->getCacheService()) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, 'phpbb_notification_types', 'phpbb_user_notifications');
    }

    /**
     * Gets the private 'pagination' shared service.
     *
     * @return \phpbb\pagination
     */
    protected function getPaginationService()
    {
        return $this->services['pagination'] = new \phpbb\pagination(${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['controller.helper']) ? $this->services['controller.helper'] : $this->getController_HelperService()) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'});
    }

    /**
     * Gets the private 'passwords.driver.argon2i' shared service.
     *
     * @return \phpbb\passwords\driver\argon2i
     */
    protected function getPasswords_Driver_Argon2iService()
    {
        return $this->services['passwords.driver.argon2i'] = new \phpbb\passwords\driver\argon2i(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['passwords.driver_helper']) ? $this->services['passwords.driver_helper'] : $this->getPasswords_DriverHelperService()) && false ?: '_'}, 65536, 2, 4);
    }

    /**
     * Gets the private 'passwords.driver.argon2id' shared service.
     *
     * @return \phpbb\passwords\driver\argon2id
     */
    protected function getPasswords_Driver_Argon2idService()
    {
        return $this->services['passwords.driver.argon2id'] = new \phpbb\passwords\driver\argon2id(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['passwords.driver_helper']) ? $this->services['passwords.driver_helper'] : $this->getPasswords_DriverHelperService()) && false ?: '_'}, 65536, 2, 4);
    }

    /**
     * Gets the private 'passwords.driver.bcrypt' shared service.
     *
     * @return \phpbb\passwords\driver\bcrypt
     */
    protected function getPasswords_Driver_BcryptService()
    {
        return $this->services['passwords.driver.bcrypt'] = new \phpbb\passwords\driver\bcrypt(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['passwords.driver_helper']) ? $this->services['passwords.driver_helper'] : $this->getPasswords_DriverHelperService()) && false ?: '_'}, 10);
    }

    /**
     * Gets the private 'passwords.driver.bcrypt_2y' shared service.
     *
     * @return \phpbb\passwords\driver\bcrypt_2y
     */
    protected function getPasswords_Driver_Bcrypt2yService()
    {
        return $this->services['passwords.driver.bcrypt_2y'] = new \phpbb\passwords\driver\bcrypt_2y(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['passwords.driver_helper']) ? $this->services['passwords.driver_helper'] : $this->getPasswords_DriverHelperService()) && false ?: '_'}, 10);
    }

    /**
     * Gets the private 'passwords.driver.bcrypt_wcf2' shared service.
     *
     * @return \phpbb\passwords\driver\bcrypt_wcf2
     */
    protected function getPasswords_Driver_BcryptWcf2Service()
    {
        return $this->services['passwords.driver.bcrypt_wcf2'] = new \phpbb\passwords\driver\bcrypt_wcf2(${($_ = isset($this->services['passwords.driver.bcrypt']) ? $this->services['passwords.driver.bcrypt'] : $this->getPasswords_Driver_BcryptService()) && false ?: '_'}, ${($_ = isset($this->services['passwords.driver_helper']) ? $this->services['passwords.driver_helper'] : $this->getPasswords_DriverHelperService()) && false ?: '_'});
    }

    /**
     * Gets the private 'passwords.driver.convert_password' shared service.
     *
     * @return \phpbb\passwords\driver\convert_password
     */
    protected function getPasswords_Driver_ConvertPasswordService()
    {
        return $this->services['passwords.driver.convert_password'] = new \phpbb\passwords\driver\convert_password(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['passwords.driver_helper']) ? $this->services['passwords.driver_helper'] : $this->getPasswords_DriverHelperService()) && false ?: '_'});
    }

    /**
     * Gets the private 'passwords.driver.md5_mybb' shared service.
     *
     * @return \phpbb\passwords\driver\md5_mybb
     */
    protected function getPasswords_Driver_Md5MybbService()
    {
        return $this->services['passwords.driver.md5_mybb'] = new \phpbb\passwords\driver\md5_mybb(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['passwords.driver_helper']) ? $this->services['passwords.driver_helper'] : $this->getPasswords_DriverHelperService()) && false ?: '_'});
    }

    /**
     * Gets the private 'passwords.driver.md5_phpbb2' shared service.
     *
     * @return \phpbb\passwords\driver\md5_phpbb2
     */
    protected function getPasswords_Driver_Md5Phpbb2Service()
    {
        return $this->services['passwords.driver.md5_phpbb2'] = new \phpbb\passwords\driver\md5_phpbb2(${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['passwords.driver.salted_md5']) ? $this->services['passwords.driver.salted_md5'] : $this->getPasswords_Driver_SaltedMd5Service()) && false ?: '_'}, ${($_ = isset($this->services['passwords.driver_helper']) ? $this->services['passwords.driver_helper'] : $this->getPasswords_DriverHelperService()) && false ?: '_'}, './', 'php');
    }

    /**
     * Gets the private 'passwords.driver.md5_vb' shared service.
     *
     * @return \phpbb\passwords\driver\md5_vb
     */
    protected function getPasswords_Driver_Md5VbService()
    {
        return $this->services['passwords.driver.md5_vb'] = new \phpbb\passwords\driver\md5_vb(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['passwords.driver_helper']) ? $this->services['passwords.driver_helper'] : $this->getPasswords_DriverHelperService()) && false ?: '_'});
    }

    /**
     * Gets the private 'passwords.driver.phpass' shared service.
     *
     * @return \phpbb\passwords\driver\phpass
     */
    protected function getPasswords_Driver_PhpassService()
    {
        return $this->services['passwords.driver.phpass'] = new \phpbb\passwords\driver\phpass(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['passwords.driver_helper']) ? $this->services['passwords.driver_helper'] : $this->getPasswords_DriverHelperService()) && false ?: '_'});
    }

    /**
     * Gets the private 'passwords.driver.salted_md5' shared service.
     *
     * @return \phpbb\passwords\driver\salted_md5
     */
    protected function getPasswords_Driver_SaltedMd5Service()
    {
        return $this->services['passwords.driver.salted_md5'] = new \phpbb\passwords\driver\salted_md5(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['passwords.driver_helper']) ? $this->services['passwords.driver_helper'] : $this->getPasswords_DriverHelperService()) && false ?: '_'});
    }

    /**
     * Gets the private 'passwords.driver.sha1' shared service.
     *
     * @return \phpbb\passwords\driver\sha1
     */
    protected function getPasswords_Driver_Sha1Service()
    {
        return $this->services['passwords.driver.sha1'] = new \phpbb\passwords\driver\sha1(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['passwords.driver_helper']) ? $this->services['passwords.driver_helper'] : $this->getPasswords_DriverHelperService()) && false ?: '_'});
    }

    /**
     * Gets the private 'passwords.driver.sha1_smf' shared service.
     *
     * @return \phpbb\passwords\driver\sha1_smf
     */
    protected function getPasswords_Driver_Sha1SmfService()
    {
        return $this->services['passwords.driver.sha1_smf'] = new \phpbb\passwords\driver\sha1_smf(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['passwords.driver_helper']) ? $this->services['passwords.driver_helper'] : $this->getPasswords_DriverHelperService()) && false ?: '_'});
    }

    /**
     * Gets the private 'passwords.driver.sha1_wcf1' shared service.
     *
     * @return \phpbb\passwords\driver\sha1_wcf1
     */
    protected function getPasswords_Driver_Sha1Wcf1Service()
    {
        return $this->services['passwords.driver.sha1_wcf1'] = new \phpbb\passwords\driver\sha1_wcf1(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['passwords.driver_helper']) ? $this->services['passwords.driver_helper'] : $this->getPasswords_DriverHelperService()) && false ?: '_'});
    }

    /**
     * Gets the private 'passwords.driver_collection' shared service.
     *
     * @return \phpbb\di\service_collection
     */
    protected function getPasswords_DriverCollectionService()
    {
        $this->services['passwords.driver_collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('passwords.driver.argon2i');
        $instance->add('passwords.driver.argon2id');
        $instance->add('passwords.driver.bcrypt');
        $instance->add('passwords.driver.bcrypt_2y');
        $instance->add('passwords.driver.bcrypt_wcf2');
        $instance->add('passwords.driver.salted_md5');
        $instance->add('passwords.driver.phpass');
        $instance->add('passwords.driver.convert_password');
        $instance->add('passwords.driver.sha1_smf');
        $instance->add('passwords.driver.sha1_wcf1');
        $instance->add('passwords.driver.sha1');
        $instance->add('passwords.driver.md5_phpbb2');
        $instance->add('passwords.driver.md5_mybb');
        $instance->add('passwords.driver.md5_vb');

        return $instance;
    }

    /**
     * Gets the private 'passwords.driver_helper' shared service.
     *
     * @return \phpbb\passwords\driver\helper
     */
    protected function getPasswords_DriverHelperService()
    {
        return $this->services['passwords.driver_helper'] = new \phpbb\passwords\driver\helper(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});
    }

    /**
     * Gets the private 'passwords.helper' shared service.
     *
     * @return \phpbb\passwords\helper
     */
    protected function getPasswords_HelperService()
    {
        return $this->services['passwords.helper'] = new \phpbb\passwords\helper();
    }

    /**
     * Gets the private 'passwords.manager' shared service.
     *
     * @return \phpbb\passwords\manager
     */
    protected function getPasswords_ManagerService()
    {
        return $this->services['passwords.manager'] = new \phpbb\passwords\manager(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['passwords.driver_collection']) ? $this->services['passwords.driver_collection'] : $this->getPasswords_DriverCollectionService()) && false ?: '_'}, ${($_ = isset($this->services['passwords.helper']) ? $this->services['passwords.helper'] : ($this->services['passwords.helper'] = new \phpbb\passwords\helper())) && false ?: '_'}, $this->parameters['passwords.algorithms']);
    }

    /**
     * Gets the private 'passwords.update.lock' shared service.
     *
     * @return \phpbb\lock\db
     */
    protected function getPasswords_Update_LockService()
    {
        return $this->services['passwords.update.lock'] = new \phpbb\lock\db('update_hashes_lock', ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'});
    }

    /**
     * Gets the private 'path_helper' shared service.
     *
     * @return \phpbb\path_helper
     */
    protected function getPathHelperService()
    {
        return $this->services['path_helper'] = new \phpbb\path_helper(${($_ = isset($this->services['symfony_request']) ? $this->services['symfony_request'] : $this->getSymfonyRequestService()) && false ?: '_'}, ${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : ($this->services['filesystem'] = new \phpbb\filesystem\filesystem())) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, './', 'php', 'adm/');
    }

    /**
     * Gets the private 'paul999.tfa.controller' shared service.
     *
     * @return \paul999\tfa\controller\main_controller
     */
    protected function getPaul999_Tfa_ControllerService()
    {
        return $this->services['paul999.tfa.controller'] = new \paul999\tfa\controller\main_controller(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['log']) ? $this->services['log'] : $this->getLogService()) && false ?: '_'}, ${($_ = isset($this->services['paul999.tfa.session_helper']) ? $this->services['paul999.tfa.session_helper'] : $this->getPaul999_Tfa_SessionHelperService()) && false ?: '_'}, './', 'php');
    }

    /**
     * Gets the private 'paul999.tfa.listener' shared service.
     *
     * @return \paul999\tfa\event\listener
     */
    protected function getPaul999_Tfa_ListenerService()
    {
        return $this->services['paul999.tfa.listener'] = new \paul999\tfa\event\listener(${($_ = isset($this->services['paul999.tfa.session_helper']) ? $this->services['paul999.tfa.session_helper'] : $this->getPaul999_Tfa_SessionHelperService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, 'php', './');
    }

    /**
     * Gets the private 'paul999.tfa.module_collection' shared service.
     *
     * @return \phpbb\di\service_collection
     */
    protected function getPaul999_Tfa_ModuleCollectionService()
    {
        $this->services['paul999.tfa.module_collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('paul999.tfa.modules.u2f');
        $instance->add('paul999.tfa.modules.otp');
        $instance->add('paul999.tfa.modules.backup_key');

        return $instance;
    }

    /**
     * Gets the private 'paul999.tfa.modules.backup_key' shared service.
     *
     * @return \paul999\tfa\modules\backup_key
     */
    protected function getPaul999_Tfa_Modules_BackupKeyService()
    {
        return $this->services['paul999.tfa.modules.backup_key'] = new \paul999\tfa\modules\backup_key(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['passwords.manager']) ? $this->services['passwords.manager'] : $this->getPasswords_ManagerService()) && false ?: '_'}, 'phpbb_tfa_back_reg');
    }

    /**
     * Gets the private 'paul999.tfa.modules.otp' shared service.
     *
     * @return \paul999\tfa\modules\otp
     */
    protected function getPaul999_Tfa_Modules_OtpService()
    {
        return $this->services['paul999.tfa.modules.otp'] = new \paul999\tfa\modules\otp(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, 'phpbb_tfa_otp_reg');
    }

    /**
     * Gets the private 'paul999.tfa.modules.u2f' shared service.
     *
     * @return \paul999\tfa\modules\u2f
     */
    protected function getPaul999_Tfa_Modules_U2fService()
    {
        return $this->services['paul999.tfa.modules.u2f'] = new \paul999\tfa\modules\u2f(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, 'phpbb_tfa_registration', './');
    }

    /**
     * Gets the private 'paul999.tfa.session_helper' shared service.
     *
     * @return \paul999\tfa\helper\session_helper
     */
    protected function getPaul999_Tfa_SessionHelperService()
    {
        return $this->services['paul999.tfa.session_helper'] = new \paul999\tfa\helper\session_helper(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['paul999.tfa.module_collection']) ? $this->services['paul999.tfa.module_collection'] : $this->getPaul999_Tfa_ModuleCollectionService()) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['controller.helper']) ? $this->services['controller.helper'] : $this->getController_HelperService()) && false ?: '_'}, 'phpbb_tfa_registration', 'phpbb_users');
    }

    /**
     * Gets the private 'php_ini' shared service.
     *
     * @return \bantu\IniGetWrapper\IniGetWrapper
     */
    protected function getPhpIniService()
    {
        return $this->services['php_ini'] = new \bantu\IniGetWrapper\IniGetWrapper();
    }

    /**
     * Gets the private 'phpbb.autogroups.admin_controller' shared service.
     *
     * @return \phpbb\autogroups\controller\admin_controller
     */
    protected function getPhpbb_Autogroups_AdminControllerService()
    {
        return $this->services['phpbb.autogroups.admin_controller'] = new \phpbb\autogroups\controller\admin_controller(${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \phpbb\cache\driver\file())) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['group_helper']) ? $this->services['group_helper'] : $this->getGroupHelperService()) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['log']) ? $this->services['log'] : $this->getLogService()) && false ?: '_'}, ${($_ = isset($this->services['phpbb.autogroups.manager']) ? $this->services['phpbb.autogroups.manager'] : $this->getPhpbb_Autogroups_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, 'phpbb_autogroups_rules', 'phpbb_autogroups_types');
    }

    /**
     * Gets the private 'phpbb.autogroups.cron.task.autogroups_check' shared service.
     *
     * @return \phpbb\autogroups\cron\autogroups_check
     */
    protected function getPhpbb_Autogroups_Cron_Task_AutogroupsCheckService()
    {
        $this->services['phpbb.autogroups.cron.task.autogroups_check'] = $instance = new \phpbb\autogroups\cron\autogroups_check(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['phpbb.autogroups.manager']) ? $this->services['phpbb.autogroups.manager'] : $this->getPhpbb_Autogroups_ManagerService()) && false ?: '_'});

        $instance->set_name('cron.task.autogroups_check');

        return $instance;
    }

    /**
     * Gets the private 'phpbb.autogroups.helper' shared service.
     *
     * @return \phpbb\autogroups\conditions\type\helper
     */
    protected function getPhpbb_Autogroups_HelperService()
    {
        return $this->services['phpbb.autogroups.helper'] = new \phpbb\autogroups\conditions\type\helper(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['notification_manager']) ? $this->services['notification_manager'] : $this->getNotificationManagerService()) && false ?: '_'}, './', 'php');
    }

    /**
     * Gets the private 'phpbb.autogroups.listener' shared service.
     *
     * @return \phpbb\autogroups\event\listener
     */
    protected function getPhpbb_Autogroups_ListenerService()
    {
        return $this->services['phpbb.autogroups.listener'] = new \phpbb\autogroups\event\listener(${($_ = isset($this->services['phpbb.autogroups.manager']) ? $this->services['phpbb.autogroups.manager'] : $this->getPhpbb_Autogroups_ManagerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'phpbb.autogroups.manager' shared service.
     *
     * @return \phpbb\autogroups\conditions\manager
     */
    protected function getPhpbb_Autogroups_ManagerService()
    {
        return $this->services['phpbb.autogroups.manager'] = new \phpbb\autogroups\conditions\manager(${($_ = isset($this->services['phpbb.autogroups.type_collection']) ? $this->services['phpbb.autogroups.type_collection'] : $this->getPhpbb_Autogroups_TypeCollectionService()) && false ?: '_'}, $this, ${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \phpbb\cache\driver\file())) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, 'phpbb_autogroups_rules', 'phpbb_autogroups_types');
    }

    /**
     * Gets the private 'phpbb.autogroups.notification.type.group_added' service.
     *
     * @return \phpbb\autogroups\notification\type\group_added
     */
    protected function getPhpbb_Autogroups_Notification_Type_GroupAddedService()
    {
        return new \phpbb\autogroups\notification\type\group_added(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, './', 'php', 'phpbb_user_notifications');
    }

    /**
     * Gets the private 'phpbb.autogroups.notification.type.group_removed' service.
     *
     * @return \phpbb\autogroups\notification\type\group_removed
     */
    protected function getPhpbb_Autogroups_Notification_Type_GroupRemovedService()
    {
        return new \phpbb\autogroups\notification\type\group_removed(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, './', 'php', 'phpbb_user_notifications');
    }

    /**
     * Gets the private 'phpbb.autogroups.type.birthdays' service.
     *
     * @return \phpbb\autogroups\conditions\type\birthdays
     */
    protected function getPhpbb_Autogroups_Type_BirthdaysService()
    {
        return new \phpbb\autogroups\conditions\type\birthdays($this, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, 'phpbb_autogroups_rules', 'phpbb_autogroups_types', './', 'php');
    }

    /**
     * Gets the private 'phpbb.autogroups.type.lastvisit' service.
     *
     * @return \phpbb\autogroups\conditions\type\lastvisit
     */
    protected function getPhpbb_Autogroups_Type_LastvisitService()
    {
        return new \phpbb\autogroups\conditions\type\lastvisit($this, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, 'phpbb_autogroups_rules', 'phpbb_autogroups_types', './', 'php');
    }

    /**
     * Gets the private 'phpbb.autogroups.type.membership' service.
     *
     * @return \phpbb\autogroups\conditions\type\membership
     */
    protected function getPhpbb_Autogroups_Type_MembershipService()
    {
        return new \phpbb\autogroups\conditions\type\membership($this, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, 'phpbb_autogroups_rules', 'phpbb_autogroups_types', './', 'php');
    }

    /**
     * Gets the private 'phpbb.autogroups.type.posts' service.
     *
     * @return \phpbb\autogroups\conditions\type\posts
     */
    protected function getPhpbb_Autogroups_Type_PostsService()
    {
        return new \phpbb\autogroups\conditions\type\posts($this, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, 'phpbb_autogroups_rules', 'phpbb_autogroups_types', './', 'php');
    }

    /**
     * Gets the private 'phpbb.autogroups.type.warnings' service.
     *
     * @return \phpbb\autogroups\conditions\type\warnings
     */
    protected function getPhpbb_Autogroups_Type_WarningsService()
    {
        return new \phpbb\autogroups\conditions\type\warnings($this, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, 'phpbb_autogroups_rules', 'phpbb_autogroups_types', './', 'php');
    }

    /**
     * Gets the private 'phpbb.autogroups.type_collection' shared service.
     *
     * @return \phpbb\di\service_collection
     */
    protected function getPhpbb_Autogroups_TypeCollectionService()
    {
        $this->services['phpbb.autogroups.type_collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('phpbb.autogroups.type.posts');
        $instance->add('phpbb.autogroups.type.warnings');
        $instance->add('phpbb.autogroups.type.membership');
        $instance->add('phpbb.autogroups.type.lastvisit');
        $instance->add('phpbb.autogroups.type.birthdays');

        return $instance;
    }

    /**
     * Gets the private 'phpbb.boardannouncements.controller' shared service.
     *
     * @return \phpbb\boardannouncements\controller\controller
     */
    protected function getPhpbb_Boardannouncements_ControllerService()
    {
        return $this->services['phpbb.boardannouncements.controller'] = new \phpbb\boardannouncements\controller\controller(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['config_text']) ? $this->services['config_text'] : $this->getConfigTextService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'});
    }

    /**
     * Gets the private 'phpbb.boardannouncements.listener' shared service.
     *
     * @return \phpbb\boardannouncements\event\listener
     */
    protected function getPhpbb_Boardannouncements_ListenerService()
    {
        return $this->services['phpbb.boardannouncements.listener'] = new \phpbb\boardannouncements\event\listener(${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \phpbb\cache\driver\file())) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['config_text']) ? $this->services['config_text'] : $this->getConfigTextService()) && false ?: '_'}, ${($_ = isset($this->services['controller.helper']) ? $this->services['controller.helper'] : $this->getController_HelperService()) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, 'php');
    }

    /**
     * Gets the private 'phpbb.collapsiblecategories.controller' shared service.
     *
     * @return \phpbb\collapsiblecategories\controller\main_controller
     */
    protected function getPhpbb_Collapsiblecategories_ControllerService()
    {
        return $this->services['phpbb.collapsiblecategories.controller'] = new \phpbb\collapsiblecategories\controller\main_controller(${($_ = isset($this->services['phpbb.collapsiblecategories.operator']) ? $this->services['phpbb.collapsiblecategories.operator'] : $this->getPhpbb_Collapsiblecategories_OperatorService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'});
    }

    /**
     * Gets the private 'phpbb.collapsiblecategories.listener' shared service.
     *
     * @return \phpbb\collapsiblecategories\event\listener
     */
    protected function getPhpbb_Collapsiblecategories_ListenerService()
    {
        return $this->services['phpbb.collapsiblecategories.listener'] = new \phpbb\collapsiblecategories\event\listener(${($_ = isset($this->services['phpbb.collapsiblecategories.operator']) ? $this->services['phpbb.collapsiblecategories.operator'] : $this->getPhpbb_Collapsiblecategories_OperatorService()) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'});
    }

    /**
     * Gets the private 'phpbb.collapsiblecategories.operator' shared service.
     *
     * @return \phpbb\collapsiblecategories\operator\operator
     */
    protected function getPhpbb_Collapsiblecategories_OperatorService()
    {
        return $this->services['phpbb.collapsiblecategories.operator'] = new \phpbb\collapsiblecategories\operator\operator(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['controller.helper']) ? $this->services['controller.helper'] : $this->getController_HelperService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'});
    }

    /**
     * Gets the private 'phpbb.feed.controller' shared service.
     *
     * @return \phpbb\feed\controller\feed
     */
    protected function getPhpbb_Feed_ControllerService()
    {
        return $this->services['phpbb.feed.controller'] = new \phpbb\feed\controller\feed(${($_ = isset($this->services['template.twig.environment']) ? $this->services['template.twig.environment'] : $this->getTemplate_Twig_EnvironmentService()) && false ?: '_'}, ${($_ = isset($this->services['symfony_request']) ? $this->services['symfony_request'] : $this->getSymfonyRequestService()) && false ?: '_'}, ${($_ = isset($this->services['controller.helper']) ? $this->services['controller.helper'] : $this->getController_HelperService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, $this, ${($_ = isset($this->services['feed.helper']) ? $this->services['feed.helper'] : $this->getFeed_HelperService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, 'php');
    }

    /**
     * Gets the private 'phpbb.help.controller.bbcode' shared service.
     *
     * @return \phpbb\help\controller\bbcode
     */
    protected function getPhpbb_Help_Controller_BbcodeService()
    {
        return $this->services['phpbb.help.controller.bbcode'] = new \phpbb\help\controller\bbcode(${($_ = isset($this->services['controller.helper']) ? $this->services['controller.helper'] : $this->getController_HelperService()) && false ?: '_'}, ${($_ = isset($this->services['phpbb.help.manager']) ? $this->services['phpbb.help.manager'] : $this->getPhpbb_Help_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, './', 'php');
    }

    /**
     * Gets the private 'phpbb.help.controller.faq' shared service.
     *
     * @return \phpbb\help\controller\faq
     */
    protected function getPhpbb_Help_Controller_FaqService()
    {
        return $this->services['phpbb.help.controller.faq'] = new \phpbb\help\controller\faq(${($_ = isset($this->services['controller.helper']) ? $this->services['controller.helper'] : $this->getController_HelperService()) && false ?: '_'}, ${($_ = isset($this->services['phpbb.help.manager']) ? $this->services['phpbb.help.manager'] : $this->getPhpbb_Help_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, './', 'php');
    }

    /**
     * Gets the private 'phpbb.help.manager' shared service.
     *
     * @return \phpbb\help\manager
     */
    protected function getPhpbb_Help_ManagerService()
    {
        return $this->services['phpbb.help.manager'] = new \phpbb\help\manager(${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'});
    }

    /**
     * Gets the private 'phpbb.report.controller' shared service.
     *
     * @return \phpbb\report\controller\report
     */
    protected function getPhpbb_Report_ControllerService()
    {
        return $this->services['phpbb.report.controller'] = new \phpbb\report\controller\report(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['controller.helper']) ? $this->services['controller.helper'] : $this->getController_HelperService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['captcha.factory']) ? $this->services['captcha.factory'] : $this->getCaptcha_FactoryService()) && false ?: '_'}, ${($_ = isset($this->services['phpbb.report.handler_factory']) ? $this->services['phpbb.report.handler_factory'] : ($this->services['phpbb.report.handler_factory'] = new \phpbb\report\handler_factory($this))) && false ?: '_'}, ${($_ = isset($this->services['phpbb.report.report_reason_list_provider']) ? $this->services['phpbb.report.report_reason_list_provider'] : $this->getPhpbb_Report_ReportReasonListProviderService()) && false ?: '_'}, './', 'php');
    }

    /**
     * Gets the private 'phpbb.report.handler_factory' shared service.
     *
     * @return \phpbb\report\handler_factory
     */
    protected function getPhpbb_Report_HandlerFactoryService()
    {
        return $this->services['phpbb.report.handler_factory'] = new \phpbb\report\handler_factory($this);
    }

    /**
     * Gets the private 'phpbb.report.handlers.report_handler_pm' service.
     *
     * @return \phpbb\report\report_handler_pm
     */
    protected function getPhpbb_Report_Handlers_ReportHandlerPmService()
    {
        return new \phpbb\report\report_handler_pm(${($_ = isset($this->services['dbal.conn.driver']) ? $this->services['dbal.conn.driver'] : $this->get('dbal.conn.driver', 1)) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['notification_manager']) ? $this->services['notification_manager'] : $this->getNotificationManagerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'phpbb.report.handlers.report_handler_post' service.
     *
     * @return \phpbb\report\report_handler_post
     */
    protected function getPhpbb_Report_Handlers_ReportHandlerPostService()
    {
        return new \phpbb\report\report_handler_post(${($_ = isset($this->services['dbal.conn.driver']) ? $this->services['dbal.conn.driver'] : $this->get('dbal.conn.driver', 1)) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['notification_manager']) ? $this->services['notification_manager'] : $this->getNotificationManagerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'phpbb.report.report_reason_list_provider' shared service.
     *
     * @return \phpbb\report\report_reason_list_provider
     */
    protected function getPhpbb_Report_ReportReasonListProviderService()
    {
        return $this->services['phpbb.report.report_reason_list_provider'] = new \phpbb\report\report_reason_list_provider(${($_ = isset($this->services['dbal.conn.driver']) ? $this->services['dbal.conn.driver'] : $this->get('dbal.conn.driver', 1)) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'});
    }

    /**
     * Gets the private 'phpbb.topicprefixes.admin_controller' shared service.
     *
     * @return \phpbb\topicprefixes\controller\admin_controller
     */
    protected function getPhpbb_Topicprefixes_AdminControllerService()
    {
        return $this->services['phpbb.topicprefixes.admin_controller'] = new \phpbb\topicprefixes\controller\admin_controller(${($_ = isset($this->services['phpbb.topicprefixes.manager']) ? $this->services['phpbb.topicprefixes.manager'] : $this->getPhpbb_Topicprefixes_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['log']) ? $this->services['log'] : $this->getLogService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, './', 'php');
    }

    /**
     * Gets the private 'phpbb.topicprefixes.listener' shared service.
     *
     * @return \phpbb\topicprefixes\event\listener
     */
    protected function getPhpbb_Topicprefixes_ListenerService()
    {
        return $this->services['phpbb.topicprefixes.listener'] = new \phpbb\topicprefixes\event\listener(${($_ = isset($this->services['phpbb.topicprefixes.manager']) ? $this->services['phpbb.topicprefixes.manager'] : $this->getPhpbb_Topicprefixes_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'});
    }

    /**
     * Gets the private 'phpbb.topicprefixes.manager' shared service.
     *
     * @return \phpbb\topicprefixes\prefixes\manager
     */
    protected function getPhpbb_Topicprefixes_ManagerService()
    {
        return $this->services['phpbb.topicprefixes.manager'] = new \phpbb\topicprefixes\prefixes\manager(${($_ = isset($this->services['phpbb.topicprefixes.nestedset_prefixes']) ? $this->services['phpbb.topicprefixes.nestedset_prefixes'] : $this->getPhpbb_Topicprefixes_NestedsetPrefixesService()) && false ?: '_'});
    }

    /**
     * Gets the private 'phpbb.topicprefixes.nestedset_prefixes' shared service.
     *
     * @return \phpbb\topicprefixes\prefixes\nestedset_prefixes
     */
    protected function getPhpbb_Topicprefixes_NestedsetPrefixesService()
    {
        return $this->services['phpbb.topicprefixes.nestedset_prefixes'] = new \phpbb\topicprefixes\prefixes\nestedset_prefixes(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['phpbb.topicprefixes.table_lock']) ? $this->services['phpbb.topicprefixes.table_lock'] : $this->getPhpbb_Topicprefixes_TableLockService()) && false ?: '_'}, 'phpbb_topic_prefixes');
    }

    /**
     * Gets the private 'phpbb.topicprefixes.table_lock' shared service.
     *
     * @return \phpbb\lock\db
     */
    protected function getPhpbb_Topicprefixes_TableLockService()
    {
        return $this->services['phpbb.topicprefixes.table_lock'] = new \phpbb\lock\db('topicprefixes.table_lock.topic_prefixes_table', ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'});
    }

    /**
     * Gets the private 'phpbb.ucp.controller.reset_password' shared service.
     *
     * @return \phpbb\ucp\controller\reset_password
     */
    protected function getPhpbb_Ucp_Controller_ResetPasswordService()
    {
        return $this->services['phpbb.ucp.controller.reset_password'] = new \phpbb\ucp\controller\reset_password(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['controller.helper']) ? $this->services['controller.helper'] : $this->getController_HelperService()) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['log']) ? $this->services['log'] : $this->getLogService()) && false ?: '_'}, ${($_ = isset($this->services['passwords.manager']) ? $this->services['passwords.manager'] : $this->getPasswords_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, 'phpbb_users', './', 'php');
    }

    /**
     * Gets the private 'phpbb.viglink.acp_listener' shared service.
     *
     * @return \phpbb\viglink\event\acp_listener
     */
    protected function getPhpbb_Viglink_AcpListenerService()
    {
        return $this->services['phpbb.viglink.acp_listener'] = new \phpbb\viglink\event\acp_listener(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['phpbb.viglink.helper']) ? $this->services['phpbb.viglink.helper'] : $this->getPhpbb_Viglink_HelperService()) && false ?: '_'}, './', 'php');
    }

    /**
     * Gets the private 'phpbb.viglink.cron.task.viglink' shared service.
     *
     * @return \phpbb\viglink\cron\viglink
     */
    protected function getPhpbb_Viglink_Cron_Task_ViglinkService()
    {
        $this->services['phpbb.viglink.cron.task.viglink'] = $instance = new \phpbb\viglink\cron\viglink(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['phpbb.viglink.helper']) ? $this->services['phpbb.viglink.helper'] : $this->getPhpbb_Viglink_HelperService()) && false ?: '_'});

        $instance->set_name('cron.task.viglink');

        return $instance;
    }

    /**
     * Gets the private 'phpbb.viglink.helper' shared service.
     *
     * @return \phpbb\viglink\acp\viglink_helper
     */
    protected function getPhpbb_Viglink_HelperService()
    {
        return $this->services['phpbb.viglink.helper'] = new \phpbb\viglink\acp\viglink_helper(${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \phpbb\cache\driver\file())) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['file_downloader']) ? $this->services['file_downloader'] : ($this->services['file_downloader'] = new \phpbb\file_downloader())) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['log']) ? $this->services['log'] : $this->getLogService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'});
    }

    /**
     * Gets the private 'phpbb.viglink.listener' shared service.
     *
     * @return \phpbb\viglink\event\listener
     */
    protected function getPhpbb_Viglink_ListenerService()
    {
        return $this->services['phpbb.viglink.listener'] = new \phpbb\viglink\event\listener(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'});
    }

    /**
     * Gets the private 'phpbbmodders.banhammer.admin.controller' shared service.
     *
     * @return \phpbbmodders\banhammer\controller\admin_controller
     */
    protected function getPhpbbmodders_Banhammer_Admin_ControllerService()
    {
        return $this->services['phpbbmodders.banhammer.admin.controller'] = new \phpbbmodders\banhammer\controller\admin_controller(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['log']) ? $this->services['log'] : $this->getLogService()) && false ?: '_'}, ${($_ = isset($this->services['phpbbmodders.banhammer.core.bantime']) ? $this->services['phpbbmodders.banhammer.core.bantime'] : $this->getPhpbbmodders_Banhammer_Core_BantimeService()) && false ?: '_'});
    }

    /**
     * Gets the private 'phpbbmodders.banhammer.core.bantime' shared service.
     *
     * @return \phpbbmodders\banhammer\core\bantime
     */
    protected function getPhpbbmodders_Banhammer_Core_BantimeService()
    {
        return $this->services['phpbbmodders.banhammer.core.bantime'] = new \phpbbmodders\banhammer\core\bantime(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'});
    }

    /**
     * Gets the private 'phpbbmodders.banhammer.listener' shared service.
     *
     * @return \phpbbmodders\banhammer\event\banhammer_listener
     */
    protected function getPhpbbmodders_Banhammer_ListenerService()
    {
        return $this->services['phpbbmodders.banhammer.listener'] = new \phpbbmodders\banhammer\event\banhammer_listener(${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \phpbb\cache\driver\file())) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['phpbbmodders.banhammer.core.bantime']) ? $this->services['phpbbmodders.banhammer.core.bantime'] : $this->getPhpbbmodders_Banhammer_Core_BantimeService()) && false ?: '_'}, './', 'php');
    }

    /**
     * Gets the private 'planetstyles.flightdeck.listener' shared service.
     *
     * @return \planetstyles\flightdeck\event\listener
     */
    protected function getPlanetstyles_Flightdeck_ListenerService()
    {
        return $this->services['planetstyles.flightdeck.listener'] = new \planetstyles\flightdeck\event\listener(${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \phpbb\cache\driver\file())) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['config_text']) ? $this->services['config_text'] : $this->getConfigTextService()) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'});
    }

    /**
     * Gets the private 'plupload' shared service.
     *
     * @return \phpbb\plupload\plupload
     */
    protected function getPluploadService()
    {
        return $this->services['plupload'] = new \phpbb\plupload\plupload('./', ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['php_ini']) ? $this->services['php_ini'] : ($this->services['php_ini'] = new \bantu\IniGetWrapper\IniGetWrapper())) && false ?: '_'}, ${($_ = isset($this->services['mimetype.guesser']) ? $this->services['mimetype.guesser'] : $this->getMimetype_GuesserService()) && false ?: '_'});
    }

    /**
     * Gets the private 'profilefields.lang_helper' shared service.
     *
     * @return \phpbb\profilefields\lang_helper
     */
    protected function getProfilefields_LangHelperService()
    {
        return $this->services['profilefields.lang_helper'] = new \phpbb\profilefields\lang_helper(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, 'phpbb_profile_fields_lang');
    }

    /**
     * Gets the private 'profilefields.manager' shared service.
     *
     * @return \phpbb\profilefields\manager
     */
    protected function getProfilefields_ManagerService()
    {
        return $this->services['profilefields.manager'] = new \phpbb\profilefields\manager(${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['config_text']) ? $this->services['config_text'] : $this->getConfigTextService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['dbal.tools']) ? $this->services['dbal.tools'] : $this->getDbal_ToolsService()) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['log']) ? $this->services['log'] : $this->getLogService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['profilefields.type_collection']) ? $this->services['profilefields.type_collection'] : $this->getProfilefields_TypeCollectionService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, 'phpbb_profile_fields', 'phpbb_profile_fields_data', 'phpbb_profile_fields_lang', 'phpbb_profile_lang');
    }

    /**
     * Gets the private 'profilefields.type.bool' shared service.
     *
     * @return \phpbb\profilefields\type\type_bool
     */
    protected function getProfilefields_Type_BoolService()
    {
        return $this->services['profilefields.type.bool'] = new \phpbb\profilefields\type\type_bool(${($_ = isset($this->services['profilefields.lang_helper']) ? $this->services['profilefields.lang_helper'] : $this->getProfilefields_LangHelperService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'});
    }

    /**
     * Gets the private 'profilefields.type.date' shared service.
     *
     * @return \phpbb\profilefields\type\type_date
     */
    protected function getProfilefields_Type_DateService()
    {
        return $this->services['profilefields.type.date'] = new \phpbb\profilefields\type\type_date(${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'});
    }

    /**
     * Gets the private 'profilefields.type.dropdown' shared service.
     *
     * @return \phpbb\profilefields\type\type_dropdown
     */
    protected function getProfilefields_Type_DropdownService()
    {
        return $this->services['profilefields.type.dropdown'] = new \phpbb\profilefields\type\type_dropdown(${($_ = isset($this->services['profilefields.lang_helper']) ? $this->services['profilefields.lang_helper'] : $this->getProfilefields_LangHelperService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'});
    }

    /**
     * Gets the private 'profilefields.type.int' shared service.
     *
     * @return \phpbb\profilefields\type\type_int
     */
    protected function getProfilefields_Type_IntService()
    {
        return $this->services['profilefields.type.int'] = new \phpbb\profilefields\type\type_int(${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'});
    }

    /**
     * Gets the private 'profilefields.type.string' shared service.
     *
     * @return \phpbb\profilefields\type\type_string
     */
    protected function getProfilefields_Type_StringService()
    {
        return $this->services['profilefields.type.string'] = new \phpbb\profilefields\type\type_string(${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'});
    }

    /**
     * Gets the private 'profilefields.type.text' shared service.
     *
     * @return \phpbb\profilefields\type\type_text
     */
    protected function getProfilefields_Type_TextService()
    {
        return $this->services['profilefields.type.text'] = new \phpbb\profilefields\type\type_text(${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'});
    }

    /**
     * Gets the private 'profilefields.type.url' shared service.
     *
     * @return \phpbb\profilefields\type\type_url
     */
    protected function getProfilefields_Type_UrlService()
    {
        return $this->services['profilefields.type.url'] = new \phpbb\profilefields\type\type_url(${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'});
    }

    /**
     * Gets the private 'profilefields.type_collection' shared service.
     *
     * @return \phpbb\di\service_collection
     */
    protected function getProfilefields_TypeCollectionService()
    {
        $this->services['profilefields.type_collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('profilefields.type.bool');
        $instance->add('profilefields.type.date');
        $instance->add('profilefields.type.dropdown');
        $instance->add('profilefields.type.int');
        $instance->add('profilefields.type.string');
        $instance->add('profilefields.type.text');
        $instance->add('profilefields.type.url');

        return $instance;
    }

    /**
     * Gets the private 'request' shared service.
     *
     * @return \phpbb\request\request
     */
    protected function getRequestService()
    {
        return $this->services['request'] = new \phpbb\request\request(NULL, true);
    }

    /**
     * Gets the private 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the private 'rmcgirr83.printallposts.listener' shared service.
     *
     * @return \rmcgirr83\printallposts\event\listener
     */
    protected function getRmcgirr83_Printallposts_ListenerService()
    {
        return $this->services['rmcgirr83.printallposts.listener'] = new \rmcgirr83\printallposts\event\listener(${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, './', 'php');
    }

    /**
     * Gets the private 'router' shared service.
     *
     * @return \phpbb\routing\router
     */
    protected function getRouterService()
    {
        return $this->services['router'] = new \phpbb\routing\router($this, ${($_ = isset($this->services['routing.chained_resources_locator']) ? $this->services['routing.chained_resources_locator'] : $this->getRouting_ChainedResourcesLocatorService()) && false ?: '_'}, ${($_ = isset($this->services['routing.delegated_loader']) ? $this->services['routing.delegated_loader'] : $this->getRouting_DelegatedLoaderService()) && false ?: '_'}, 'php', './cache/production/');
    }

    /**
     * Gets the private 'router.listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouter_ListenerService()
    {
        return $this->services['router.listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'});
    }

    /**
     * Gets the private 'routing.chained_resources_locator' shared service.
     *
     * @return \phpbb\routing\resources_locator\chained_resources_locator
     */
    protected function getRouting_ChainedResourcesLocatorService()
    {
        return $this->services['routing.chained_resources_locator'] = new \phpbb\routing\resources_locator\chained_resources_locator(${($_ = isset($this->services['routing.resources_locator.collection']) ? $this->services['routing.resources_locator.collection'] : $this->getRouting_ResourcesLocator_CollectionService()) && false ?: '_'});
    }

    /**
     * Gets the private 'routing.delegated_loader' shared service.
     *
     * @return \Symfony\Component\Config\Loader\DelegatingLoader
     */
    protected function getRouting_DelegatedLoaderService()
    {
        return $this->services['routing.delegated_loader'] = new \Symfony\Component\Config\Loader\DelegatingLoader(${($_ = isset($this->services['routing.resolver']) ? $this->services['routing.resolver'] : $this->getRouting_ResolverService()) && false ?: '_'});
    }

    /**
     * Gets the private 'routing.helper' shared service.
     *
     * @return \phpbb\routing\helper
     */
    protected function getRouting_HelperService()
    {
        return $this->services['routing.helper'] = new \phpbb\routing\helper(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['symfony_request']) ? $this->services['symfony_request'] : $this->getSymfonyRequestService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : ($this->services['filesystem'] = new \phpbb\filesystem\filesystem())) && false ?: '_'}, './', 'php');
    }

    /**
     * Gets the private 'routing.loader.collection' shared service.
     *
     * @return \phpbb\di\service_collection
     */
    protected function getRouting_Loader_CollectionService()
    {
        $this->services['routing.loader.collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('routing.loader.yaml');

        return $instance;
    }

    /**
     * Gets the private 'routing.loader.yaml' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\YamlFileLoader
     */
    protected function getRouting_Loader_YamlService()
    {
        return $this->services['routing.loader.yaml'] = new \Symfony\Component\Routing\Loader\YamlFileLoader(${($_ = isset($this->services['file_locator']) ? $this->services['file_locator'] : $this->getFileLocatorService()) && false ?: '_'});
    }

    /**
     * Gets the private 'routing.resolver' shared service.
     *
     * @return \phpbb\routing\loader_resolver
     */
    protected function getRouting_ResolverService()
    {
        return $this->services['routing.resolver'] = new \phpbb\routing\loader_resolver(${($_ = isset($this->services['routing.loader.collection']) ? $this->services['routing.loader.collection'] : $this->getRouting_Loader_CollectionService()) && false ?: '_'});
    }

    /**
     * Gets the private 'routing.resources_locator.collection' shared service.
     *
     * @return \phpbb\di\service_collection
     */
    protected function getRouting_ResourcesLocator_CollectionService()
    {
        $this->services['routing.resources_locator.collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('routing.resources_locator.default');

        return $instance;
    }

    /**
     * Gets the private 'routing.resources_locator.default' shared service.
     *
     * @return \phpbb\routing\resources_locator\default_resources_locator
     */
    protected function getRouting_ResourcesLocator_DefaultService()
    {
        return $this->services['routing.resources_locator.default'] = new \phpbb\routing\resources_locator\default_resources_locator('./', 'production', ${($_ = isset($this->services['ext.manager']) ? $this->services['ext.manager'] : $this->getExt_ManagerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'stevotvr.flair.controller.acp.cats' shared service.
     *
     * @return \stevotvr\flair\controller\acp_cats_controller
     */
    protected function getStevotvr_Flair_Controller_Acp_CatsService()
    {
        $this->services['stevotvr.flair.controller.acp.cats'] = $instance = new \stevotvr\flair\controller\acp_cats_controller($this, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'});

        $instance->set_path_info('./', 'php', './images/flair/');
        $instance->setup(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['stevotvr.flair.operator.category']) ? $this->services['stevotvr.flair.operator.category'] : $this->getStevotvr_Flair_Operator_CategoryService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'stevotvr.flair.controller.acp.flair' shared service.
     *
     * @return \stevotvr\flair\controller\acp_flair_controller
     */
    protected function getStevotvr_Flair_Controller_Acp_FlairService()
    {
        $this->services['stevotvr.flair.controller.acp.flair'] = $instance = new \stevotvr\flair\controller\acp_flair_controller($this, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'});

        $instance->set_path_info('./', 'php', './images/flair/');
        $instance->setup(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['group_helper']) ? $this->services['group_helper'] : $this->getGroupHelperService()) && false ?: '_'}, ${($_ = isset($this->services['stevotvr.flair.operator.category']) ? $this->services['stevotvr.flair.operator.category'] : $this->getStevotvr_Flair_Operator_CategoryService()) && false ?: '_'}, ${($_ = isset($this->services['stevotvr.flair.operator.flair']) ? $this->services['stevotvr.flair.operator.flair'] : $this->getStevotvr_Flair_Operator_FlairService()) && false ?: '_'}, ${($_ = isset($this->services['stevotvr.flair.operator.image']) ? $this->services['stevotvr.flair.operator.image'] : $this->getStevotvr_Flair_Operator_ImageService()) && false ?: '_'}, ${($_ = isset($this->services['stevotvr.flair.operator.trigger']) ? $this->services['stevotvr.flair.operator.trigger'] : $this->getStevotvr_Flair_Operator_TriggerService()) && false ?: '_'});
        $instance->set_trigger_names(${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, $this->parameters['stevotvr.flair.trigger_names']);

        return $instance;
    }

    /**
     * Gets the private 'stevotvr.flair.controller.acp.images' shared service.
     *
     * @return \stevotvr\flair\controller\acp_images_controller
     */
    protected function getStevotvr_Flair_Controller_Acp_ImagesService()
    {
        $this->services['stevotvr.flair.controller.acp.images'] = $instance = new \stevotvr\flair\controller\acp_images_controller($this, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'});

        $instance->set_path_info('./', 'php', './images/flair/');
        $instance->setup(${($_ = isset($this->services['files.factory']) ? $this->services['files.factory'] : ($this->services['files.factory'] = new \phpbb\files\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['stevotvr.flair.operator.image']) ? $this->services['stevotvr.flair.operator.image'] : $this->getStevotvr_Flair_Operator_ImageService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'stevotvr.flair.controller.acp.main' shared service.
     *
     * @return \stevotvr\flair\controller\acp_main_controller
     */
    protected function getStevotvr_Flair_Controller_Acp_MainService()
    {
        $this->services['stevotvr.flair.controller.acp.main'] = $instance = new \stevotvr\flair\controller\acp_main_controller($this, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'});

        $instance->set_path_info('./', 'php', './images/flair/');
        $instance->setup(${($_ = isset($this->services['stevotvr.flair.operator.category']) ? $this->services['stevotvr.flair.operator.category'] : $this->getStevotvr_Flair_Operator_CategoryService()) && false ?: '_'}, ${($_ = isset($this->services['stevotvr.flair.operator.flair']) ? $this->services['stevotvr.flair.operator.flair'] : $this->getStevotvr_Flair_Operator_FlairService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'stevotvr.flair.controller.legend' shared service.
     *
     * @return \stevotvr\flair\controller\legend_controller
     */
    protected function getStevotvr_Flair_Controller_LegendService()
    {
        return $this->services['stevotvr.flair.controller.legend'] = new \stevotvr\flair\controller\legend_controller(${($_ = isset($this->services['controller.helper']) ? $this->services['controller.helper'] : $this->getController_HelperService()) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['path_helper']) ? $this->services['path_helper'] : $this->getPathHelperService()) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['stevotvr.flair.operator.category']) ? $this->services['stevotvr.flair.operator.category'] : $this->getStevotvr_Flair_Operator_CategoryService()) && false ?: '_'}, ${($_ = isset($this->services['stevotvr.flair.operator.flair']) ? $this->services['stevotvr.flair.operator.flair'] : $this->getStevotvr_Flair_Operator_FlairService()) && false ?: '_'});
    }

    /**
     * Gets the private 'stevotvr.flair.controller.mcp.user' shared service.
     *
     * @return \stevotvr\flair\controller\mcp_user_controller
     */
    protected function getStevotvr_Flair_Controller_Mcp_UserService()
    {
        $this->services['stevotvr.flair.controller.mcp.user'] = $instance = new \stevotvr\flair\controller\mcp_user_controller($this, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'});

        $instance->set_path_info('./', 'php', './images/flair/');
        $instance->setup(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['stevotvr.flair.operator.category']) ? $this->services['stevotvr.flair.operator.category'] : $this->getStevotvr_Flair_Operator_CategoryService()) && false ?: '_'}, ${($_ = isset($this->services['stevotvr.flair.operator.flair']) ? $this->services['stevotvr.flair.operator.flair'] : $this->getStevotvr_Flair_Operator_FlairService()) && false ?: '_'}, ${($_ = isset($this->services['stevotvr.flair.operator.user']) ? $this->services['stevotvr.flair.operator.user'] : $this->getStevotvr_Flair_Operator_UserService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'stevotvr.flair.controller.ucp.flair' shared service.
     *
     * @return \stevotvr\flair\controller\ucp_flair_controller
     */
    protected function getStevotvr_Flair_Controller_Ucp_FlairService()
    {
        $this->services['stevotvr.flair.controller.ucp.flair'] = $instance = new \stevotvr\flair\controller\ucp_flair_controller($this, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'});

        $instance->set_path_info('./', 'php', './images/flair/');
        $instance->setup(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['stevotvr.flair.operator.flair']) ? $this->services['stevotvr.flair.operator.flair'] : $this->getStevotvr_Flair_Operator_FlairService()) && false ?: '_'}, ${($_ = isset($this->services['stevotvr.flair.operator.user']) ? $this->services['stevotvr.flair.operator.user'] : $this->getStevotvr_Flair_Operator_UserService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'stevotvr.flair.cron.task.main' shared service.
     *
     * @return \stevotvr\flair\cron\task\main
     */
    protected function getStevotvr_Flair_Cron_Task_MainService()
    {
        $this->services['stevotvr.flair.cron.task.main'] = $instance = new \stevotvr\flair\cron\task\main(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['notification_manager']) ? $this->services['notification_manager'] : $this->getNotificationManagerService()) && false ?: '_'}, 'phpbb_flair_notif');

        $instance->set_name('cron.task.stevotvr.flair');

        return $instance;
    }

    /**
     * Gets the private 'stevotvr.flair.entity.category' service.
     *
     * @return \stevotvr\flair\entity\category
     */
    protected function getStevotvr_Flair_Entity_CategoryService()
    {
        return new \stevotvr\flair\entity\category(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, 'phpbb_flair_cats');
    }

    /**
     * Gets the private 'stevotvr.flair.entity.flair' service.
     *
     * @return \stevotvr\flair\entity\flair
     */
    protected function getStevotvr_Flair_Entity_FlairService()
    {
        $instance = new \stevotvr\flair\entity\flair(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, 'phpbb_flair');

        $instance->setup(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, $this->parameters['stevotvr.flair.icons']);

        return $instance;
    }

    /**
     * Gets the private 'stevotvr.flair.listener' shared service.
     *
     * @return \stevotvr\flair\event\main_listener
     */
    protected function getStevotvr_Flair_ListenerService()
    {
        return $this->services['stevotvr.flair.listener'] = new \stevotvr\flair\event\main_listener(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['controller.helper']) ? $this->services['controller.helper'] : $this->getController_HelperService()) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['stevotvr.flair.operator.flair']) ? $this->services['stevotvr.flair.operator.flair'] : $this->getStevotvr_Flair_Operator_FlairService()) && false ?: '_'}, ${($_ = isset($this->services['stevotvr.flair.operator.trigger']) ? $this->services['stevotvr.flair.operator.trigger'] : $this->getStevotvr_Flair_Operator_TriggerService()) && false ?: '_'}, ${($_ = isset($this->services['stevotvr.flair.operator.user']) ? $this->services['stevotvr.flair.operator.user'] : $this->getStevotvr_Flair_Operator_UserService()) && false ?: '_'}, './images/flair/');
    }

    /**
     * Gets the private 'stevotvr.flair.notification.type.flair' service.
     *
     * @return \stevotvr\flair\notification\type\flair
     */
    protected function getStevotvr_Flair_Notification_Type_FlairService()
    {
        $instance = new \stevotvr\flair\notification\type\flair(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'}, './', 'php', 'phpbb_user_notifications');

        $instance->setup(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['controller.helper']) ? $this->services['controller.helper'] : $this->getController_HelperService()) && false ?: '_'}, ${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'stevotvr.flair.operator.category' shared service.
     *
     * @return \stevotvr\flair\operator\category
     */
    protected function getStevotvr_Flair_Operator_CategoryService()
    {
        return $this->services['stevotvr.flair.operator.category'] = new \stevotvr\flair\operator\category($this, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, 'phpbb_flair', 'phpbb_flair_cats', 'phpbb_flair_favs', 'phpbb_flair_groups', 'phpbb_flair_notif', 'phpbb_flair_triggers', 'phpbb_flair_users');
    }

    /**
     * Gets the private 'stevotvr.flair.operator.flair' shared service.
     *
     * @return \stevotvr\flair\operator\flair
     */
    protected function getStevotvr_Flair_Operator_FlairService()
    {
        return $this->services['stevotvr.flair.operator.flair'] = new \stevotvr\flair\operator\flair($this, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, 'phpbb_flair', 'phpbb_flair_cats', 'phpbb_flair_favs', 'phpbb_flair_groups', 'phpbb_flair_notif', 'phpbb_flair_triggers', 'phpbb_flair_users');
    }

    /**
     * Gets the private 'stevotvr.flair.operator.image' shared service.
     *
     * @return \stevotvr\flair\operator\image
     */
    protected function getStevotvr_Flair_Operator_ImageService()
    {
        $this->services['stevotvr.flair.operator.image'] = $instance = new \stevotvr\flair\operator\image($this, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, 'phpbb_flair', 'phpbb_flair_cats', 'phpbb_flair_favs', 'phpbb_flair_groups', 'phpbb_flair_notif', 'phpbb_flair_triggers', 'phpbb_flair_users');

        $instance->setup(${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : ($this->services['filesystem'] = new \phpbb\filesystem\filesystem())) && false ?: '_'}, './images/flair/');

        return $instance;
    }

    /**
     * Gets the private 'stevotvr.flair.operator.trigger' shared service.
     *
     * @return \stevotvr\flair\operator\trigger
     */
    protected function getStevotvr_Flair_Operator_TriggerService()
    {
        $this->services['stevotvr.flair.operator.trigger'] = $instance = new \stevotvr\flair\operator\trigger($this, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, 'phpbb_flair', 'phpbb_flair_cats', 'phpbb_flair_favs', 'phpbb_flair_groups', 'phpbb_flair_notif', 'phpbb_flair_triggers', 'phpbb_flair_users');

        $instance->setup(${($_ = isset($this->services['stevotvr.flair.operator.user']) ? $this->services['stevotvr.flair.operator.user'] : $this->getStevotvr_Flair_Operator_UserService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'stevotvr.flair.operator.user' shared service.
     *
     * @return \stevotvr\flair\operator\user
     */
    protected function getStevotvr_Flair_Operator_UserService()
    {
        $this->services['stevotvr.flair.operator.user'] = $instance = new \stevotvr\flair\operator\user($this, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, 'phpbb_flair', 'phpbb_flair_cats', 'phpbb_flair_favs', 'phpbb_flair_groups', 'phpbb_flair_notif', 'phpbb_flair_triggers', 'phpbb_flair_users');

        $instance->setup(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'symfony_request' shared service.
     *
     * @return \phpbb\symfony_request
     */
    protected function getSymfonyRequestService()
    {
        return $this->services['symfony_request'] = new \phpbb\symfony_request(${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'});
    }

    /**
     * Gets the private 'symfony_response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener
     */
    protected function getSymfonyResponseListenerService()
    {
        return $this->services['symfony_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the private 'template' shared service.
     *
     * @return \phpbb\template\twig\twig
     */
    protected function getTemplateService()
    {
        return $this->services['template'] = new \phpbb\template\twig\twig(${($_ = isset($this->services['path_helper']) ? $this->services['path_helper'] : $this->getPathHelperService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['template_context']) ? $this->services['template_context'] : ($this->services['template_context'] = new \phpbb\template\context())) && false ?: '_'}, ${($_ = isset($this->services['template.twig.environment']) ? $this->services['template.twig.environment'] : $this->getTemplate_Twig_EnvironmentService()) && false ?: '_'}, './cache/production/twig/', ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['template.twig.extensions.collection']) ? $this->services['template.twig.extensions.collection'] : $this->getTemplate_Twig_Extensions_CollectionService()) && false ?: '_'}, ${($_ = isset($this->services['ext.manager']) ? $this->services['ext.manager'] : $this->getExt_ManagerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'template.twig.environment' shared service.
     *
     * @return \phpbb\template\twig\environment
     */
    protected function getTemplate_Twig_EnvironmentService()
    {
        $this->services['template.twig.environment'] = $instance = new \phpbb\template\twig\environment(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : ($this->services['filesystem'] = new \phpbb\filesystem\filesystem())) && false ?: '_'}, ${($_ = isset($this->services['path_helper']) ? $this->services['path_helper'] : $this->getPathHelperService()) && false ?: '_'}, './cache/production/twig/', ${($_ = isset($this->services['ext.manager']) ? $this->services['ext.manager'] : $this->getExt_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['template.twig.loader']) ? $this->services['template.twig.loader'] : $this->getTemplate_Twig_LoaderService()) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, []);

        $instance->setLexer(${($_ = isset($this->services['template.twig.lexer']) ? $this->services['template.twig.lexer'] : $this->getTemplate_Twig_LexerService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'template.twig.extensions.avatar' shared service.
     *
     * @return \phpbb\template\twig\extension\avatar
     */
    protected function getTemplate_Twig_Extensions_AvatarService()
    {
        return $this->services['template.twig.extensions.avatar'] = new \phpbb\template\twig\extension\avatar();
    }

    /**
     * Gets the private 'template.twig.extensions.collection' shared service.
     *
     * @return \phpbb\di\service_collection
     */
    protected function getTemplate_Twig_Extensions_CollectionService()
    {
        $this->services['template.twig.extensions.collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('template.twig.extensions.phpbb');
        $instance->add('template.twig.extensions.avatar');
        $instance->add('template.twig.extensions.config');
        $instance->add('template.twig.extensions.routing');
        $instance->add('template.twig.extensions.username');

        return $instance;
    }

    /**
     * Gets the private 'template.twig.extensions.config' shared service.
     *
     * @return \phpbb\template\twig\extension\config
     */
    protected function getTemplate_Twig_Extensions_ConfigService()
    {
        return $this->services['template.twig.extensions.config'] = new \phpbb\template\twig\extension\config(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});
    }

    /**
     * Gets the private 'template.twig.extensions.debug' shared service.
     *
     * @return \Twig\Extension\DebugExtension
     */
    protected function getTemplate_Twig_Extensions_DebugService()
    {
        return $this->services['template.twig.extensions.debug'] = new \Twig\Extension\DebugExtension();
    }

    /**
     * Gets the private 'template.twig.extensions.phpbb' shared service.
     *
     * @return \phpbb\template\twig\extension
     */
    protected function getTemplate_Twig_Extensions_PhpbbService()
    {
        return $this->services['template.twig.extensions.phpbb'] = new \phpbb\template\twig\extension(${($_ = isset($this->services['template_context']) ? $this->services['template_context'] : ($this->services['template_context'] = new \phpbb\template\context())) && false ?: '_'}, ${($_ = isset($this->services['template.twig.environment']) ? $this->services['template.twig.environment'] : $this->getTemplate_Twig_EnvironmentService()) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'});
    }

    /**
     * Gets the private 'template.twig.extensions.routing' shared service.
     *
     * @return \phpbb\template\twig\extension\routing
     */
    protected function getTemplate_Twig_Extensions_RoutingService()
    {
        return $this->services['template.twig.extensions.routing'] = new \phpbb\template\twig\extension\routing(${($_ = isset($this->services['routing.helper']) ? $this->services['routing.helper'] : $this->getRouting_HelperService()) && false ?: '_'});
    }

    /**
     * Gets the private 'template.twig.extensions.username' shared service.
     *
     * @return \phpbb\template\twig\extension\username
     */
    protected function getTemplate_Twig_Extensions_UsernameService()
    {
        return $this->services['template.twig.extensions.username'] = new \phpbb\template\twig\extension\username();
    }

    /**
     * Gets the private 'template.twig.lexer' shared service.
     *
     * @return \phpbb\template\twig\lexer
     */
    protected function getTemplate_Twig_LexerService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['template.twig.lexer'] = $this->createProxy('lexer_6d586c2', function () {
                return \lexer_6d586c2::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getTemplate_Twig_LexerService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        return new \phpbb\template\twig\lexer(${($_ = isset($this->services['template.twig.environment']) ? $this->services['template.twig.environment'] : $this->getTemplate_Twig_EnvironmentService()) && false ?: '_'});
    }

    /**
     * Gets the private 'template.twig.loader' shared service.
     *
     * @return \phpbb\template\twig\loader
     */
    protected function getTemplate_Twig_LoaderService()
    {
        return $this->services['template.twig.loader'] = new \phpbb\template\twig\loader(${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : ($this->services['filesystem'] = new \phpbb\filesystem\filesystem())) && false ?: '_'});
    }

    /**
     * Gets the private 'template_context' shared service.
     *
     * @return \phpbb\template\context
     */
    protected function getTemplateContextService()
    {
        return $this->services['template_context'] = new \phpbb\template\context();
    }

    /**
     * Gets the private 'text_formatter.acp_utils' shared service.
     *
     * @return \phpbb\textformatter\s9e\acp_utils
     */
    protected function getTextFormatter_AcpUtilsService()
    {
        return $this->services['text_formatter.acp_utils'] = new \phpbb\textformatter\s9e\acp_utils(${($_ = isset($this->services['text_formatter.s9e.factory']) ? $this->services['text_formatter.s9e.factory'] : $this->getTextFormatter_S9e_FactoryService()) && false ?: '_'});
    }

    /**
     * Gets the private 'text_formatter.data_access' shared service.
     *
     * @return \phpbb\textformatter\data_access
     */
    protected function getTextFormatter_DataAccessService()
    {
        return $this->services['text_formatter.data_access'] = new \phpbb\textformatter\data_access(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, 'phpbb_bbcodes', 'phpbb_smilies', 'phpbb_styles', 'phpbb_words', './styles/');
    }

    /**
     * Gets the private 'text_formatter.s9e.bbcode_merger' shared service.
     *
     * @return \phpbb\textformatter\s9e\bbcode_merger
     */
    protected function getTextFormatter_S9e_BbcodeMergerService()
    {
        return $this->services['text_formatter.s9e.bbcode_merger'] = new \phpbb\textformatter\s9e\bbcode_merger(${($_ = isset($this->services['text_formatter.s9e.factory']) ? $this->services['text_formatter.s9e.factory'] : $this->getTextFormatter_S9e_FactoryService()) && false ?: '_'});
    }

    /**
     * Gets the private 'text_formatter.s9e.factory' shared service.
     *
     * @return \phpbb\textformatter\s9e\factory
     */
    protected function getTextFormatter_S9e_FactoryService()
    {
        return $this->services['text_formatter.s9e.factory'] = new \phpbb\textformatter\s9e\factory(${($_ = isset($this->services['text_formatter.data_access']) ? $this->services['text_formatter.data_access'] : $this->getTextFormatter_DataAccessService()) && false ?: '_'}, ${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \phpbb\cache\driver\file())) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['text_formatter.s9e.link_helper']) ? $this->services['text_formatter.s9e.link_helper'] : ($this->services['text_formatter.s9e.link_helper'] = new \phpbb\textformatter\s9e\link_helper())) && false ?: '_'}, ${($_ = isset($this->services['log']) ? $this->services['log'] : $this->getLogService()) && false ?: '_'}, './cache/production/', '_text_formatter_parser', '_text_formatter_renderer');
    }

    /**
     * Gets the private 'text_formatter.s9e.link_helper' shared service.
     *
     * @return \phpbb\textformatter\s9e\link_helper
     */
    protected function getTextFormatter_S9e_LinkHelperService()
    {
        return $this->services['text_formatter.s9e.link_helper'] = new \phpbb\textformatter\s9e\link_helper();
    }

    /**
     * Gets the private 'text_formatter.s9e.parser' shared service.
     *
     * @return \phpbb\textformatter\s9e\parser
     */
    protected function getTextFormatter_S9e_ParserService()
    {
        return $this->services['text_formatter.s9e.parser'] = new \phpbb\textformatter\s9e\parser(${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \phpbb\cache\driver\file())) && false ?: '_'}, '_text_formatter_parser', ${($_ = isset($this->services['text_formatter.s9e.factory']) ? $this->services['text_formatter.s9e.factory'] : $this->getTextFormatter_S9e_FactoryService()) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'});
    }

    /**
     * Gets the private 'text_formatter.s9e.quote_helper' shared service.
     *
     * @return \phpbb\textformatter\s9e\quote_helper
     */
    protected function getTextFormatter_S9e_QuoteHelperService()
    {
        return $this->services['text_formatter.s9e.quote_helper'] = new \phpbb\textformatter\s9e\quote_helper(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, './', 'php');
    }

    /**
     * Gets the private 'text_formatter.s9e.renderer' shared service.
     *
     * @return \phpbb\textformatter\s9e\renderer
     */
    protected function getTextFormatter_S9e_RendererService()
    {
        $this->services['text_formatter.s9e.renderer'] = $instance = new \phpbb\textformatter\s9e\renderer(${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \phpbb\cache\driver\file())) && false ?: '_'}, './cache/production/', '_text_formatter_renderer', ${($_ = isset($this->services['text_formatter.s9e.factory']) ? $this->services['text_formatter.s9e.factory'] : $this->getTextFormatter_S9e_FactoryService()) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'});

        $a = ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'};

        $instance->configure_quote_helper(${($_ = isset($this->services['text_formatter.s9e.quote_helper']) ? $this->services['text_formatter.s9e.quote_helper'] : $this->getTextFormatter_S9e_QuoteHelperService()) && false ?: '_'});
        $instance->configure_smilies_path($a, ${($_ = isset($this->services['path_helper']) ? $this->services['path_helper'] : $this->getPathHelperService()) && false ?: '_'});
        $instance->configure_user(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, $a, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \phpbb\auth\auth())) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'text_formatter.s9e.utils' shared service.
     *
     * @return \phpbb\textformatter\s9e\utils
     */
    protected function getTextFormatter_S9e_UtilsService()
    {
        return $this->services['text_formatter.s9e.utils'] = new \phpbb\textformatter\s9e\utils();
    }

    /**
     * Gets the private 'text_reparser.contact_admin_info' shared service.
     *
     * @return \phpbb\textreparser\plugins\contact_admin_info
     */
    protected function getTextReparser_ContactAdminInfoService()
    {
        $this->services['text_reparser.contact_admin_info'] = $instance = new \phpbb\textreparser\plugins\contact_admin_info(${($_ = isset($this->services['config_text']) ? $this->services['config_text'] : $this->getConfigTextService()) && false ?: '_'});

        $instance->set_name('contact_admin_info');

        return $instance;
    }

    /**
     * Gets the private 'text_reparser.forum_description' shared service.
     *
     * @return \phpbb\textreparser\plugins\forum_description
     */
    protected function getTextReparser_ForumDescriptionService()
    {
        $this->services['text_reparser.forum_description'] = $instance = new \phpbb\textreparser\plugins\forum_description(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, 'phpbb_forums');

        $instance->set_name('forum_description');

        return $instance;
    }

    /**
     * Gets the private 'text_reparser.forum_rules' shared service.
     *
     * @return \phpbb\textreparser\plugins\forum_rules
     */
    protected function getTextReparser_ForumRulesService()
    {
        $this->services['text_reparser.forum_rules'] = $instance = new \phpbb\textreparser\plugins\forum_rules(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, 'phpbb_forums');

        $instance->set_name('forum_rules');

        return $instance;
    }

    /**
     * Gets the private 'text_reparser.group_description' shared service.
     *
     * @return \phpbb\textreparser\plugins\group_description
     */
    protected function getTextReparser_GroupDescriptionService()
    {
        $this->services['text_reparser.group_description'] = $instance = new \phpbb\textreparser\plugins\group_description(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, 'phpbb_groups');

        $instance->set_name('group_description');

        return $instance;
    }

    /**
     * Gets the private 'text_reparser.lock' shared service.
     *
     * @return \phpbb\lock\db
     */
    protected function getTextReparser_LockService()
    {
        return $this->services['text_reparser.lock'] = new \phpbb\lock\db('reparse_lock', ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'});
    }

    /**
     * Gets the private 'text_reparser.manager' shared service.
     *
     * @return \phpbb\textreparser\manager
     */
    protected function getTextReparser_ManagerService()
    {
        return $this->services['text_reparser.manager'] = new \phpbb\textreparser\manager(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['config_text']) ? $this->services['config_text'] : $this->getConfigTextService()) && false ?: '_'}, ${($_ = isset($this->services['text_reparser_collection']) ? $this->services['text_reparser_collection'] : $this->getTextReparserCollectionService()) && false ?: '_'});
    }

    /**
     * Gets the private 'text_reparser.pm_text' shared service.
     *
     * @return \phpbb\textreparser\plugins\pm_text
     */
    protected function getTextReparser_PmTextService()
    {
        $this->services['text_reparser.pm_text'] = $instance = new \phpbb\textreparser\plugins\pm_text(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, 'phpbb_privmsgs');

        $instance->set_name('pm_text');

        return $instance;
    }

    /**
     * Gets the private 'text_reparser.poll_option' shared service.
     *
     * @return \phpbb\textreparser\plugins\poll_option
     */
    protected function getTextReparser_PollOptionService()
    {
        $this->services['text_reparser.poll_option'] = $instance = new \phpbb\textreparser\plugins\poll_option(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, 'phpbb_poll_options');

        $instance->set_name('poll_option');

        return $instance;
    }

    /**
     * Gets the private 'text_reparser.poll_title' shared service.
     *
     * @return \phpbb\textreparser\plugins\poll_title
     */
    protected function getTextReparser_PollTitleService()
    {
        $this->services['text_reparser.poll_title'] = $instance = new \phpbb\textreparser\plugins\poll_title(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, 'phpbb_topics');

        $instance->set_name('poll_title');

        return $instance;
    }

    /**
     * Gets the private 'text_reparser.post_text' shared service.
     *
     * @return \phpbb\textreparser\plugins\post_text
     */
    protected function getTextReparser_PostTextService()
    {
        $this->services['text_reparser.post_text'] = $instance = new \phpbb\textreparser\plugins\post_text(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, 'phpbb_posts');

        $instance->set_name('post_text');

        return $instance;
    }

    /**
     * Gets the private 'text_reparser.user_signature' shared service.
     *
     * @return \phpbb\textreparser\plugins\user_signature
     */
    protected function getTextReparser_UserSignatureService()
    {
        $this->services['text_reparser.user_signature'] = $instance = new \phpbb\textreparser\plugins\user_signature(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, 'phpbb_users');

        $instance->set_name('user_signature');

        return $instance;
    }

    /**
     * Gets the private 'text_reparser_collection' shared service.
     *
     * @return \phpbb\di\service_collection
     */
    protected function getTextReparserCollectionService()
    {
        $this->services['text_reparser_collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('text_reparser.contact_admin_info');
        $instance->add('text_reparser.forum_description');
        $instance->add('text_reparser.forum_rules');
        $instance->add('text_reparser.group_description');
        $instance->add('text_reparser.pm_text');
        $instance->add('text_reparser.poll_option');
        $instance->add('text_reparser.poll_title');
        $instance->add('text_reparser.post_text');
        $instance->add('text_reparser.user_signature');

        return $instance;
    }

    /**
     * Gets the private 'upload_imagesize' shared service.
     *
     * @return \FastImageSize\FastImageSize
     */
    protected function getUploadImagesizeService()
    {
        return $this->services['upload_imagesize'] = new \FastImageSize\FastImageSize();
    }

    /**
     * Gets the private 'user' shared service.
     *
     * @return \phpbb\user
     */
    protected function getUserService()
    {
        return $this->services['user'] = new \phpbb\user(${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, '\\phpbb\\datetime');
    }

    /**
     * Gets the private 'user_loader' shared service.
     *
     * @return \phpbb\user_loader
     */
    protected function getUserLoaderService()
    {
        return $this->services['user_loader'] = new \phpbb\user_loader(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, './', 'php', 'phpbb_users');
    }

    /**
     * Gets the private 'version_helper' service.
     *
     * @return \phpbb\version_helper
     */
    protected function getVersionHelperService()
    {
        return new \phpbb\version_helper(${($_ = isset($this->services['cache']) ? $this->services['cache'] : $this->getCacheService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['file_downloader']) ? $this->services['file_downloader'] : ($this->services['file_downloader'] = new \phpbb\file_downloader())) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'});
    }

    /**
     * Gets the private 'viewonline_helper' shared service.
     *
     * @return \phpbb\viewonline_helper
     */
    protected function getViewonlineHelperService()
    {
        return $this->services['viewonline_helper'] = new \phpbb\viewonline_helper(${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : ($this->services['filesystem'] = new \phpbb\filesystem\filesystem())) && false ?: '_'});
    }

    /**
     * Gets the private 'vse.abbc3.acp_listener' shared service.
     *
     * @return \vse\abbc3\event\acp_listener
     */
    protected function getVse_Abbc3_AcpListenerService()
    {
        return $this->services['vse.abbc3.acp_listener'] = new \vse\abbc3\event\acp_listener(${($_ = isset($this->services['vse.abbc3.acp_manager']) ? $this->services['vse.abbc3.acp_manager'] : $this->getVse_Abbc3_AcpManagerService()) && false ?: '_'}, './');
    }

    /**
     * Gets the private 'vse.abbc3.acp_manager' shared service.
     *
     * @return \vse\abbc3\core\acp_manager
     */
    protected function getVse_Abbc3_AcpManagerService()
    {
        return $this->services['vse.abbc3.acp_manager'] = new \vse\abbc3\core\acp_manager(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['group_helper']) ? $this->services['group_helper'] : $this->getGroupHelperService()) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'});
    }

    /**
     * Gets the private 'vse.abbc3.bbcodes_config' shared service.
     *
     * @return \vse\abbc3\core\bbcodes_config
     */
    protected function getVse_Abbc3_BbcodesConfigService()
    {
        return $this->services['vse.abbc3.bbcodes_config'] = new \vse\abbc3\core\bbcodes_config();
    }

    /**
     * Gets the private 'vse.abbc3.bbcodes_display' shared service.
     *
     * @return \vse\abbc3\core\bbcodes_display
     */
    protected function getVse_Abbc3_BbcodesDisplayService()
    {
        return $this->services['vse.abbc3.bbcodes_display'] = new \vse\abbc3\core\bbcodes_display(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['ext.manager']) ? $this->services['ext.manager'] : $this->getExt_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, './');
    }

    /**
     * Gets the private 'vse.abbc3.bbcodes_help' shared service.
     *
     * @return \vse\abbc3\core\bbcodes_help
     */
    protected function getVse_Abbc3_BbcodesHelpService()
    {
        return $this->services['vse.abbc3.bbcodes_help'] = new \vse\abbc3\core\bbcodes_help(${($_ = isset($this->services['vse.abbc3.bbcodes_display']) ? $this->services['vse.abbc3.bbcodes_display'] : $this->getVse_Abbc3_BbcodesDisplayService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \phpbb\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'});
    }

    /**
     * Gets the private 'vse.abbc3.listener' shared service.
     *
     * @return \vse\abbc3\event\listener
     */
    protected function getVse_Abbc3_ListenerService()
    {
        return $this->services['vse.abbc3.listener'] = new \vse\abbc3\event\listener(${($_ = isset($this->services['vse.abbc3.bbcodes_config']) ? $this->services['vse.abbc3.bbcodes_config'] : ($this->services['vse.abbc3.bbcodes_config'] = new \vse\abbc3\core\bbcodes_config())) && false ?: '_'}, ${($_ = isset($this->services['vse.abbc3.bbcodes_display']) ? $this->services['vse.abbc3.bbcodes_display'] : $this->getVse_Abbc3_BbcodesDisplayService()) && false ?: '_'}, ${($_ = isset($this->services['vse.abbc3.bbcodes_help']) ? $this->services['vse.abbc3.bbcodes_help'] : $this->getVse_Abbc3_BbcodesHelpService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['routing.helper']) ? $this->services['routing.helper'] : $this->getRouting_HelperService()) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'});
    }

    /**
     * Gets the private 'vse.abbc3.wizard' shared service.
     *
     * @return \vse\abbc3\controller\wizard
     */
    protected function getVse_Abbc3_WizardService()
    {
        return $this->services['vse.abbc3.wizard'] = new \vse\abbc3\controller\wizard(${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \phpbb\cache\driver\file())) && false ?: '_'}, ${($_ = isset($this->services['controller.helper']) ? $this->services['controller.helper'] : $this->getController_HelperService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \phpbb\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['text_formatter.s9e.factory']) ? $this->services['text_formatter.s9e.factory'] : $this->getTextFormatter_S9e_FactoryService()) && false ?: '_'});
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            $name = $this->normalizeParameterName($name);

            if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
                throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
            }
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;
        $name = $this->normalizeParameterName($name);

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [];
    private $dynamicParameters = [];

    /**
     * Computes a dynamic parameter.
     *
     * @param string $name The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
    }

    private $normalizedParameterNames = [];

    private function normalizeParameterName($name)
    {
        if (isset($this->normalizedParameterNames[$normalizedName = strtolower($name)]) || isset($this->parameters[$normalizedName]) || array_key_exists($normalizedName, $this->parameters)) {
            $normalizedName = isset($this->normalizedParameterNames[$normalizedName]) ? $this->normalizedParameterNames[$normalizedName] : $normalizedName;
            if ((string) $name !== $normalizedName) {
                @trigger_error(sprintf('Parameter names will be made case sensitive in Symfony 4.0. Using "%s" instead of "%s" is deprecated since Symfony 3.4.', $name, $normalizedName), E_USER_DEPRECATED);
            }
        } else {
            $normalizedName = $this->normalizedParameterNames[$normalizedName] = (string) $name;
        }

        return $normalizedName;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return [
            'core.root_path' => './',
            'core.php_ext' => 'php',
            'core.environment' => 'production',
            'core.debug' => false,
            'core.cache_dir' => './cache/production/',
            'passwords.driver.argon2_memory_cost' => 65536,
            'passwords.driver.argon2_threads' => 2,
            'passwords.driver.argon2_time_cost' => 4,
            'passwords.driver.bcrypt_cost' => 10,
            'text_formatter.cache.dir' => './cache/production/',
            'text_formatter.cache.parser.key' => '_text_formatter_parser',
            'text_formatter.cache.renderer.key' => '_text_formatter_renderer',
            'core.template.cache_path' => './cache/production/twig/',
            'tables.acl_groups' => 'phpbb_acl_groups',
            'tables.acl_options' => 'phpbb_acl_options',
            'tables.acl_roles' => 'phpbb_acl_roles',
            'tables.acl_roles_data' => 'phpbb_acl_roles_data',
            'tables.acl_users' => 'phpbb_acl_users',
            'tables.attachments' => 'phpbb_attachments',
            'tables.auth_provider_oauth_token_storage' => 'phpbb_oauth_tokens',
            'tables.auth_provider_oauth_states' => 'phpbb_oauth_states',
            'tables.auth_provider_oauth_account_assoc' => 'phpbb_oauth_accounts',
            'tables.banlist' => 'phpbb_banlist',
            'tables.bbcodes' => 'phpbb_bbcodes',
            'tables.bookmarks' => 'phpbb_bookmarks',
            'tables.bots' => 'phpbb_bots',
            'tables.captcha_qa_questions' => 'phpbb_captcha_questions',
            'tables.captcha_qa_answers' => 'phpbb_captcha_answers',
            'tables.captcha_qa_confirm' => 'phpbb_qa_confirm',
            'tables.config' => 'phpbb_config',
            'tables.config_text' => 'phpbb_config_text',
            'tables.confirm' => 'phpbb_confirm',
            'tables.disallow' => 'phpbb_disallow',
            'tables.drafts' => 'phpbb_drafts',
            'tables.ext' => 'phpbb_ext',
            'tables.extensions' => 'phpbb_extensions',
            'tables.extension_groups' => 'phpbb_extension_groups',
            'tables.forums' => 'phpbb_forums',
            'tables.forums_access' => 'phpbb_forums_access',
            'tables.forums_track' => 'phpbb_forums_track',
            'tables.forums_watch' => 'phpbb_forums_watch',
            'tables.groups' => 'phpbb_groups',
            'tables.icons' => 'phpbb_icons',
            'tables.lang' => 'phpbb_lang',
            'tables.log' => 'phpbb_log',
            'tables.login_attempts' => 'phpbb_login_attempts',
            'tables.migrations' => 'phpbb_migrations',
            'tables.moderator_cache' => 'phpbb_moderator_cache',
            'tables.modules' => 'phpbb_modules',
            'tables.notification_emails' => 'phpbb_notification_emails',
            'tables.notification_types' => 'phpbb_notification_types',
            'tables.notifications' => 'phpbb_notifications',
            'tables.poll_options' => 'phpbb_poll_options',
            'tables.poll_votes' => 'phpbb_poll_votes',
            'tables.posts' => 'phpbb_posts',
            'tables.privmsgs' => 'phpbb_privmsgs',
            'tables.privmsgs_folder' => 'phpbb_privmsgs_folder',
            'tables.privmsgs_rules' => 'phpbb_privmsgs_rules',
            'tables.privmsgs_to' => 'phpbb_privmsgs_to',
            'tables.profile_fields' => 'phpbb_profile_fields',
            'tables.profile_fields_data' => 'phpbb_profile_fields_data',
            'tables.profile_fields_options_language' => 'phpbb_profile_fields_lang',
            'tables.profile_fields_language' => 'phpbb_profile_lang',
            'tables.ranks' => 'phpbb_ranks',
            'tables.reports' => 'phpbb_reports',
            'tables.reports_reasons' => 'phpbb_reports_reasons',
            'tables.search_results' => 'phpbb_search_results',
            'tables.search_wordlist' => 'phpbb_search_wordlist',
            'tables.search_wordmatch' => 'phpbb_search_wordmatch',
            'tables.sessions' => 'phpbb_sessions',
            'tables.sessions_keys' => 'phpbb_sessions_keys',
            'tables.sitelist' => 'phpbb_sitelist',
            'tables.smilies' => 'phpbb_smilies',
            'tables.sphinx' => 'phpbb_sphinx',
            'tables.styles' => 'phpbb_styles',
            'tables.styles_template' => 'phpbb_styles_template',
            'tables.styles_template_data' => 'phpbb_styles_template_data',
            'tables.styles_theme' => 'phpbb_styles_theme',
            'tables.styles_imageset' => 'phpbb_styles_imageset',
            'tables.styles_imageset_data' => 'phpbb_styles_imageset_data',
            'tables.teampage' => 'phpbb_teampage',
            'tables.topics' => 'phpbb_topics',
            'tables.topics_posted' => 'phpbb_topics_posted',
            'tables.topics_track' => 'phpbb_topics_track',
            'tables.topics_watch' => 'phpbb_topics_watch',
            'tables.user_group' => 'phpbb_user_group',
            'tables.user_notifications' => 'phpbb_user_notifications',
            'tables.users' => 'phpbb_users',
            'tables.warnings' => 'phpbb_warnings',
            'tables.words' => 'phpbb_words',
            'tables.zebra' => 'phpbb_zebra',
            'core.disable_super_globals' => true,
            'datetime.class' => '\\phpbb\\datetime',
            'mimetype.guesser.priority.lowest' => -2,
            'mimetype.guesser.priority.low' => -1,
            'mimetype.guesser.priority.default' => 0,
            'mimetype.guesser.priority.high' => 1,
            'mimetype.guesser.priority.highest' => 2,
            'passwords.algorithms' => [
                0 => 'passwords.driver.argon2id',
                1 => 'passwords.driver.argon2i',
                2 => 'passwords.driver.bcrypt_2y',
                3 => 'passwords.driver.bcrypt',
                4 => 'passwords.driver.salted_md5',
                5 => 'passwords.driver.phpass',
            ],
            'allow_install_dir' => false,
            'debug.exceptions' => false,
            'debug.load_time' => false,
            'debug.sql_explain' => false,
            'debug.memory' => false,
            'debug.show_errors' => false,
            'session.log_errors' => false,
            'paul999.2fa.tables.tfa_registration' => 'phpbb_tfa_registration',
            'paul999.2fa.tables.tfa_otp_registration' => 'phpbb_tfa_otp_reg',
            'paul999.2fa.tables.tfa_backup_registration' => 'phpbb_tfa_back_reg',
            'phpbb.autogroups.tables.autogroups_rules' => 'phpbb_autogroups_rules',
            'phpbb.autogroups.tables.autogroups_types' => 'phpbb_autogroups_types',
            'phpbb.topicprefixes.tables.topic_prefixes' => 'phpbb_topic_prefixes',
            'stevotvr.flair.tables.flair' => 'phpbb_flair',
            'stevotvr.flair.tables.flair_categories' => 'phpbb_flair_cats',
            'stevotvr.flair.tables.flair_favorites' => 'phpbb_flair_favs',
            'stevotvr.flair.tables.flair_groups' => 'phpbb_flair_groups',
            'stevotvr.flair.tables.flair_notifications' => 'phpbb_flair_notif',
            'stevotvr.flair.tables.flair_triggers' => 'phpbb_flair_triggers',
            'stevotvr.flair.tables.flair_users' => 'phpbb_flair_users',
            'stevotvr.flair.trigger_names' => [
                0 => 'post_count',
                1 => 'membership_days',
            ],
            'stevotvr.flair.icons' => [
                'fa-500px' => [
                    'w' => 1.7143,
                ],
                'fa-address-book' => [
                    'w' => 1.8568,
                ],
                'fa-address-book-o' => [
                    'w' => 1.8568,
                ],
                'fa-address-card' => [
                    'w' => 2.2864,
                ],
                'fa-address-card-o' => [
                    'w' => 2.2864,
                ],
                'fa-adjust' => [
                    'w' => 1.7143,
                ],
                'fa-adn' => [
                    'w' => 1.7143,
                ],
                'fa-align-center' => [
                    'w' => 1.9994,
                ],
                'fa-align-justify' => [
                    'w' => 1.9994,
                ],
                'fa-align-left' => [
                    'w' => 1.9994,
                ],
                'fa-align-right' => [
                    'w' => 1.9994,
                ],
                'fa-amazon' => [
                    'w' => 1.9994,
                ],
                'fa-ambulance' => [
                    'w' => 2.1438,
                ],
                'fa-american-sign-language-interpreting' => [
                    'w' => 2.5714,
                ],
                'fa-anchor' => [
                    'w' => 1.9994,
                ],
                'fa-android' => [
                    'w' => 1.5718,
                ],
                'fa-angellist' => [
                    'w' => 1.4292,
                ],
                'fa-angle-double-down' => [
                    'w' => 1.2867,
                ],
                'fa-angle-double-left' => [
                    'w' => 1.1442,
                ],
                'fa-angle-double-right' => [
                    'w' => 1.1442,
                ],
                'fa-angle-double-up' => [
                    'w' => 1.2867,
                ],
                'fa-angle-down' => [
                    'w' => 1.2867,
                ],
                'fa-angle-left' => [
                    'w' => 0.7146,
                ],
                'fa-angle-right' => [
                    'w' => 0.7146,
                ],
                'fa-angle-up' => [
                    'w' => 1.2867,
                ],
                'fa-apple' => [
                    'w' => 1.5718,
                ],
                'fa-archive' => [
                    'w' => 1.9994,
                ],
                'fa-area-chart' => [
                    'w' => 2.2864,
                ],
                'fa-arrow-circle-down' => [
                    'w' => 1.7143,
                ],
                'fa-arrow-circle-left' => [
                    'w' => 1.7143,
                ],
                'fa-arrow-circle-o-down' => [
                    'w' => 1.7143,
                ],
                'fa-arrow-circle-o-left' => [
                    'w' => 1.7143,
                ],
                'fa-arrow-circle-o-right' => [
                    'w' => 1.7143,
                ],
                'fa-arrow-circle-o-up' => [
                    'w' => 1.7143,
                ],
                'fa-arrow-circle-right' => [
                    'w' => 1.7143,
                ],
                'fa-arrow-circle-up' => [
                    'w' => 1.7143,
                ],
                'fa-arrow-down' => [
                    'w' => 1.8568,
                ],
                'fa-arrow-left' => [
                    'w' => 1.7143,
                ],
                'fa-arrow-right' => [
                    'w' => 1.7143,
                ],
                'fa-arrow-up' => [
                    'w' => 1.8568,
                ],
                'fa-arrows' => [
                    'w' => 1.9994,
                ],
                'fa-arrows-alt' => [
                    'w' => 1.7143,
                ],
                'fa-arrows-h' => [
                    'w' => 1.9994,
                ],
                'fa-arrows-v' => [
                    'w' => 0.8571,
                ],
                'fa-assistive-listening-systems' => [
                    'w' => 1.9994,
                ],
                'fa-asterisk' => [
                    'w' => 1.8568,
                ],
                'fa-at' => [
                    'w' => 1.7143,
                ],
                'fa-audio-description' => [
                    'w' => 2.5714,
                ],
                'fa-backward' => [
                    'w' => 1.8568,
                ],
                'fa-balance-scale' => [
                    'w' => 2.5714,
                ],
                'fa-ban' => [
                    'w' => 1.7143,
                ],
                'fa-bandcamp' => [
                    'w' => 1.9994,
                ],
                'fa-bar-chart' => [
                    'w' => 2.2864,
                ],
                'fa-barcode' => [
                    'w' => 1.9994,
                ],
                'fa-bars' => [
                    'w' => 1.7143,
                ],
                'fa-bath' => [
                    'w' => 1.9994,
                ],
                'fa-battery-empty' => [
                    'w' => 2.5714,
                ],
                'fa-battery-full' => [
                    'w' => 2.5714,
                ],
                'fa-battery-half' => [
                    'w' => 2.5714,
                ],
                'fa-battery-quarter' => [
                    'w' => 2.5714,
                ],
                'fa-battery-three-quarters' => [
                    'w' => 2.5714,
                ],
                'fa-bed' => [
                    'w' => 2.2864,
                ],
                'fa-beer' => [
                    'w' => 1.8568,
                ],
                'fa-behance' => [
                    'w' => 2.2864,
                ],
                'fa-behance-square' => [
                    'w' => 1.7143,
                ],
                'fa-bell' => [
                    'w' => 1.9994,
                ],
                'fa-bell-o' => [
                    'w' => 1.9994,
                ],
                'fa-bell-slash' => [
                    'w' => 2.2864,
                ],
                'fa-bell-slash-o' => [
                    'w' => 2.2864,
                ],
                'fa-bicycle' => [
                    'w' => 2.5714,
                ],
                'fa-binoculars' => [
                    'w' => 1.9994,
                ],
                'fa-birthday-cake' => [
                    'w' => 1.9994,
                ],
                'fa-bitbucket' => [
                    'w' => 1.5718,
                ],
                'fa-bitbucket-square' => [
                    'w' => 1.7143,
                ],
                'fa-black-tie' => [
                    'w' => 1.7143,
                ],
                'fa-blind' => [
                    'w' => 1.5718,
                ],
                'fa-bluetooth' => [
                    'w' => 1.7143,
                ],
                'fa-bluetooth-b' => [
                    'w' => 1.1442,
                ],
                'fa-bold' => [
                    'w' => 1.5718,
                ],
                'fa-bolt' => [
                    'w' => 0.9997,
                ],
                'fa-bomb' => [
                    'w' => 1.9994,
                ],
                'fa-book' => [
                    'w' => 1.8568,
                ],
                'fa-bookmark' => [
                    'w' => 1.4292,
                ],
                'fa-bookmark-o' => [
                    'w' => 1.4292,
                ],
                'fa-braille' => [
                    'w' => 2.4289,
                ],
                'fa-briefcase' => [
                    'w' => 1.9994,
                ],
                'fa-btc' => [
                    'w' => 1.4292,
                ],
                'fa-bug' => [
                    'w' => 1.8568,
                ],
                'fa-building' => [
                    'w' => 1.7143,
                ],
                'fa-building-o' => [
                    'w' => 1.5718,
                ],
                'fa-bullhorn' => [
                    'w' => 1.9994,
                ],
                'fa-bullseye' => [
                    'w' => 1.7143,
                ],
                'fa-bus' => [
                    'w' => 1.7143,
                ],
                'fa-buysellads' => [
                    'w' => 1.7143,
                ],
                'fa-calculator' => [
                    'w' => 1.9994,
                ],
                'fa-calendar' => [
                    'w' => 1.8568,
                ],
                'fa-calendar-check-o' => [
                    'w' => 1.9994,
                ],
                'fa-calendar-minus-o' => [
                    'w' => 1.9994,
                ],
                'fa-calendar-o' => [
                    'w' => 1.8568,
                ],
                'fa-calendar-plus-o' => [
                    'w' => 1.9994,
                ],
                'fa-calendar-times-o' => [
                    'w' => 1.9994,
                ],
                'fa-camera' => [
                    'w' => 2.1438,
                ],
                'fa-camera-retro' => [
                    'w' => 1.9994,
                ],
                'fa-car' => [
                    'w' => 2.2864,
                ],
                'fa-caret-down' => [
                    'w' => 1.1442,
                ],
                'fa-caret-left' => [
                    'w' => 0.7146,
                ],
                'fa-caret-right' => [
                    'w' => 0.7146,
                ],
                'fa-caret-square-o-down' => [
                    'w' => 1.7143,
                ],
                'fa-caret-square-o-left' => [
                    'w' => 1.7143,
                ],
                'fa-caret-square-o-right' => [
                    'w' => 1.7143,
                ],
                'fa-caret-square-o-up' => [
                    'w' => 1.7143,
                ],
                'fa-caret-up' => [
                    'w' => 1.1442,
                ],
                'fa-cart-arrow-down' => [
                    'w' => 1.8568,
                ],
                'fa-cart-plus' => [
                    'w' => 1.8568,
                ],
                'fa-cc' => [
                    'w' => 2.2864,
                ],
                'fa-cc-amex' => [
                    'w' => 2.5714,
                ],
                'fa-cc-diners-club' => [
                    'w' => 2.5714,
                ],
                'fa-cc-discover' => [
                    'w' => 2.5714,
                ],
                'fa-cc-jcb' => [
                    'w' => 2.5714,
                ],
                'fa-cc-mastercard' => [
                    'w' => 2.5714,
                ],
                'fa-cc-paypal' => [
                    'w' => 2.5714,
                ],
                'fa-cc-stripe' => [
                    'w' => 2.5714,
                ],
                'fa-cc-visa' => [
                    'w' => 2.5714,
                ],
                'fa-certificate' => [
                    'w' => 1.7143,
                ],
                'fa-chain-broken' => [
                    'w' => 1.8568,
                ],
                'fa-check' => [
                    'w' => 1.9994,
                ],
                'fa-check-circle' => [
                    'w' => 1.7143,
                ],
                'fa-check-circle-o' => [
                    'w' => 1.7143,
                ],
                'fa-check-square' => [
                    'w' => 1.7143,
                ],
                'fa-check-square-o' => [
                    'w' => 1.8568,
                ],
                'fa-chevron-circle-down' => [
                    'w' => 1.7143,
                ],
                'fa-chevron-circle-left' => [
                    'w' => 1.7143,
                ],
                'fa-chevron-circle-right' => [
                    'w' => 1.7143,
                ],
                'fa-chevron-circle-up' => [
                    'w' => 1.7143,
                ],
                'fa-chevron-down' => [
                    'w' => 1.9994,
                ],
                'fa-chevron-left' => [
                    'w' => 1.4292,
                ],
                'fa-chevron-right' => [
                    'w' => 1.4292,
                ],
                'fa-chevron-up' => [
                    'w' => 1.9994,
                ],
                'fa-child' => [
                    'w' => 1.4292,
                ],
                'fa-chrome' => [
                    'w' => 1.9994,
                ],
                'fa-circle' => [
                    'w' => 1.7143,
                ],
                'fa-circle-o' => [
                    'w' => 1.7143,
                ],
                'fa-circle-o-notch' => [
                    'w' => 1.9994,
                ],
                'fa-circle-thin' => [
                    'w' => 1.7143,
                ],
                'fa-clipboard' => [
                    'w' => 1.9994,
                ],
                'fa-clock-o' => [
                    'w' => 1.7143,
                ],
                'fa-clone' => [
                    'w' => 1.9994,
                ],
                'fa-cloud' => [
                    'w' => 2.1438,
                ],
                'fa-cloud-download' => [
                    'w' => 2.1438,
                ],
                'fa-cloud-upload' => [
                    'w' => 2.1438,
                ],
                'fa-code' => [
                    'w' => 2.1438,
                ],
                'fa-code-fork' => [
                    'w' => 1.1442,
                ],
                'fa-codepen' => [
                    'w' => 1.9994,
                ],
                'fa-codiepie' => [
                    'w' => 1.9994,
                ],
                'fa-coffee' => [
                    'w' => 2.1438,
                ],
                'fa-cog' => [
                    'w' => 1.7143,
                ],
                'fa-cogs' => [
                    'w' => 2.1438,
                ],
                'fa-columns' => [
                    'w' => 1.8568,
                ],
                'fa-comment' => [
                    'w' => 1.9994,
                ],
                'fa-comment-o' => [
                    'w' => 1.9994,
                ],
                'fa-commenting' => [
                    'w' => 1.9994,
                ],
                'fa-commenting-o' => [
                    'w' => 1.9994,
                ],
                'fa-comments' => [
                    'w' => 1.9994,
                ],
                'fa-comments-o' => [
                    'w' => 1.9994,
                ],
                'fa-compass' => [
                    'w' => 1.7143,
                ],
                'fa-compress' => [
                    'w' => 1.7143,
                ],
                'fa-connectdevelop' => [
                    'w' => 2.2864,
                ],
                'fa-contao' => [
                    'w' => 1.9994,
                ],
                'fa-copyright' => [
                    'w' => 1.7143,
                ],
                'fa-creative-commons' => [
                    'w' => 1.9994,
                ],
                'fa-credit-card' => [
                    'w' => 2.1438,
                ],
                'fa-credit-card-alt' => [
                    'w' => 2.5714,
                ],
                'fa-crop' => [
                    'w' => 1.8568,
                ],
                'fa-crosshairs' => [
                    'w' => 1.7143,
                ],
                'fa-css3' => [
                    'w' => 1.9994,
                ],
                'fa-cube' => [
                    'w' => 1.9994,
                ],
                'fa-cubes' => [
                    'w' => 2.5714,
                ],
                'fa-cutlery' => [
                    'w' => 1.5718,
                ],
                'fa-dashcube' => [
                    'w' => 1.7143,
                ],
                'fa-database' => [
                    'w' => 1.7143,
                ],
                'fa-deaf' => [
                    'w' => 1.9994,
                ],
                'fa-delicious' => [
                    'w' => 1.7143,
                ],
                'fa-desktop' => [
                    'w' => 2.1438,
                ],
                'fa-deviantart' => [
                    'w' => 1.1442,
                ],
                'fa-diamond' => [
                    'w' => 2.2864,
                ],
                'fa-digg' => [
                    'w' => 2.2864,
                ],
                'fa-dot-circle-o' => [
                    'w' => 1.7143,
                ],
                'fa-download' => [
                    'w' => 1.8568,
                ],
                'fa-dribbble' => [
                    'w' => 1.7143,
                ],
                'fa-dropbox' => [
                    'w' => 1.9994,
                ],
                'fa-drupal' => [
                    'w' => 1.7143,
                ],
                'fa-edge' => [
                    'w' => 1.9994,
                ],
                'fa-eercast' => [
                    'w' => 1.9994,
                ],
                'fa-eject' => [
                    'w' => 1.7162,
                ],
                'fa-ellipsis-h' => [
                    'w' => 1.5718,
                ],
                'fa-ellipsis-v' => [
                    'w' => 0.4295,
                ],
                'fa-empire' => [
                    'w' => 1.9994,
                ],
                'fa-envelope' => [
                    'w' => 1.9994,
                ],
                'fa-envelope-o' => [
                    'w' => 1.9994,
                ],
                'fa-envelope-open' => [
                    'w' => 1.9994,
                ],
                'fa-envelope-open-o' => [
                    'w' => 1.9994,
                ],
                'fa-envelope-square' => [
                    'w' => 1.7143,
                ],
                'fa-envira' => [
                    'w' => 1.9994,
                ],
                'fa-eraser' => [
                    'w' => 2.1438,
                ],
                'fa-etsy' => [
                    'w' => 1.7143,
                ],
                'fa-eur' => [
                    'w' => 1.1442,
                ],
                'fa-exchange' => [
                    'w' => 1.9994,
                ],
                'fa-exclamation' => [
                    'w' => 0.7146,
                ],
                'fa-exclamation-circle' => [
                    'w' => 1.7143,
                ],
                'fa-exclamation-triangle' => [
                    'w' => 1.9994,
                ],
                'fa-expand' => [
                    'w' => 1.7143,
                ],
                'fa-expeditedssl' => [
                    'w' => 1.9994,
                ],
                'fa-external-link' => [
                    'w' => 1.9994,
                ],
                'fa-external-link-square' => [
                    'w' => 1.7143,
                ],
                'fa-eye' => [
                    'w' => 1.9994,
                ],
                'fa-eye-slash' => [
                    'w' => 1.9994,
                ],
                'fa-eyedropper' => [
                    'w' => 1.9994,
                ],
                'fa-facebook' => [
                    'w' => 1.1442,
                ],
                'fa-facebook-official' => [
                    'w' => 1.7143,
                ],
                'fa-facebook-square' => [
                    'w' => 1.7143,
                ],
                'fa-fast-backward' => [
                    'w' => 1.9994,
                ],
                'fa-fast-forward' => [
                    'w' => 1.9994,
                ],
                'fa-fax' => [
                    'w' => 1.9994,
                ],
                'fa-female' => [
                    'w' => 1.4292,
                ],
                'fa-fighter-jet' => [
                    'w' => 2.1438,
                ],
                'fa-file' => [
                    'w' => 1.7143,
                ],
                'fa-file-archive-o' => [
                    'w' => 1.7143,
                ],
                'fa-file-audio-o' => [
                    'w' => 1.7143,
                ],
                'fa-file-code-o' => [
                    'w' => 1.7143,
                ],
                'fa-file-excel-o' => [
                    'w' => 1.7143,
                ],
                'fa-file-image-o' => [
                    'w' => 1.7143,
                ],
                'fa-file-o' => [
                    'w' => 1.7143,
                ],
                'fa-file-pdf-o' => [
                    'w' => 1.7143,
                ],
                'fa-file-powerpoint-o' => [
                    'w' => 1.7143,
                ],
                'fa-file-text' => [
                    'w' => 1.7143,
                ],
                'fa-file-text-o' => [
                    'w' => 1.7143,
                ],
                'fa-file-video-o' => [
                    'w' => 1.7143,
                ],
                'fa-file-word-o' => [
                    'w' => 1.7143,
                ],
                'fa-files-o' => [
                    'w' => 1.9994,
                ],
                'fa-film' => [
                    'w' => 2.1438,
                ],
                'fa-filter' => [
                    'w' => 1.5718,
                ],
                'fa-fire' => [
                    'w' => 1.5718,
                ],
                'fa-fire-extinguisher' => [
                    'w' => 1.5718,
                ],
                'fa-firefox' => [
                    'w' => 1.9994,
                ],
                'fa-first-order' => [
                    'w' => 1.7143,
                ],
                'fa-flag' => [
                    'w' => 1.9994,
                ],
                'fa-flag-checkered' => [
                    'w' => 1.9994,
                ],
                'fa-flag-o' => [
                    'w' => 1.9994,
                ],
                'fa-flask' => [
                    'w' => 1.8568,
                ],
                'fa-flickr' => [
                    'w' => 1.7143,
                ],
                'fa-floppy-o' => [
                    'w' => 1.7143,
                ],
                'fa-folder' => [
                    'w' => 1.8568,
                ],
                'fa-folder-o' => [
                    'w' => 1.8568,
                ],
                'fa-folder-open' => [
                    'w' => 2.1438,
                ],
                'fa-folder-open-o' => [
                    'w' => 2.1438,
                ],
                'fa-font' => [
                    'w' => 1.8568,
                ],
                'fa-font-awesome' => [
                    'w' => 1.7143,
                ],
                'fa-fonticons' => [
                    'w' => 1.7143,
                ],
                'fa-fort-awesome' => [
                    'w' => 1.9994,
                ],
                'fa-forumbee' => [
                    'w' => 1.7143,
                ],
                'fa-forward' => [
                    'w' => 1.8568,
                ],
                'fa-foursquare' => [
                    'w' => 1.4292,
                ],
                'fa-free-code-camp' => [
                    'w' => 2.5714,
                ],
                'fa-frown-o' => [
                    'w' => 1.7143,
                ],
                'fa-futbol-o' => [
                    'w' => 1.9994,
                ],
                'fa-gamepad' => [
                    'w' => 2.1438,
                ],
                'fa-gavel' => [
                    'w' => 1.9994,
                ],
                'fa-gbp' => [
                    'w' => 1.1442,
                ],
                'fa-genderless' => [
                    'w' => 1.4292,
                ],
                'fa-get-pocket' => [
                    'w' => 1.9193,
                ],
                'fa-gg' => [
                    'w' => 2.2864,
                ],
                'fa-gg-circle' => [
                    'w' => 1.9994,
                ],
                'fa-gift' => [
                    'w' => 1.7143,
                ],
                'fa-git' => [
                    'w' => 1.9994,
                ],
                'fa-git-square' => [
                    'w' => 1.7143,
                ],
                'fa-github' => [
                    'w' => 1.7143,
                ],
                'fa-github-alt' => [
                    'w' => 1.8568,
                ],
                'fa-github-square' => [
                    'w' => 1.7143,
                ],
                'fa-gitlab' => [
                    'w' => 1.9994,
                ],
                'fa-glass' => [
                    'w' => 1.9994,
                ],
                'fa-glide' => [
                    'w' => 1.7143,
                ],
                'fa-glide-g' => [
                    'w' => 1.7143,
                ],
                'fa-globe' => [
                    'w' => 1.7143,
                ],
                'fa-google' => [
                    'w' => 1.7143,
                ],
                'fa-google-plus' => [
                    'w' => 2.5714,
                ],
                'fa-google-plus-official' => [
                    'w' => 1.7143,
                ],
                'fa-google-plus-square' => [
                    'w' => 1.7143,
                ],
                'fa-google-wallet' => [
                    'w' => 1.9994,
                ],
                'fa-graduation-cap' => [
                    'w' => 2.5714,
                ],
                'fa-gratipay' => [
                    'w' => 1.7143,
                ],
                'fa-grav' => [
                    'w' => 2.0033,
                ],
                'fa-h-square' => [
                    'w' => 1.7143,
                ],
                'fa-hacker-news' => [
                    'w' => 1.7143,
                ],
                'fa-hand-lizard-o' => [
                    'w' => 2.2864,
                ],
                'fa-hand-o-down' => [
                    'w' => 1.7143,
                ],
                'fa-hand-o-left' => [
                    'w' => 1.9994,
                ],
                'fa-hand-o-right' => [
                    'w' => 1.9994,
                ],
                'fa-hand-o-up' => [
                    'w' => 1.7143,
                ],
                'fa-hand-paper-o' => [
                    'w' => 1.9994,
                ],
                'fa-hand-peace-o' => [
                    'w' => 1.7143,
                ],
                'fa-hand-pointer-o' => [
                    'w' => 1.9994,
                ],
                'fa-hand-rock-o' => [
                    'w' => 1.7143,
                ],
                'fa-hand-scissors-o' => [
                    'w' => 1.9994,
                ],
                'fa-hand-spock-o' => [
                    'w' => 2.2864,
                ],
                'fa-handshake-o' => [
                    'w' => 2.5714,
                ],
                'fa-hashtag' => [
                    'w' => 1.9994,
                ],
                'fa-hdd-o' => [
                    'w' => 1.7143,
                ],
                'fa-header' => [
                    'w' => 1.9994,
                ],
                'fa-headphones' => [
                    'w' => 1.8568,
                ],
                'fa-heart' => [
                    'w' => 1.9994,
                ],
                'fa-heart-o' => [
                    'w' => 1.9994,
                ],
                'fa-heartbeat' => [
                    'w' => 1.9994,
                ],
                'fa-history' => [
                    'w' => 1.7143,
                ],
                'fa-home' => [
                    'w' => 1.8568,
                ],
                'fa-hospital-o' => [
                    'w' => 1.5718,
                ],
                'fa-hourglass' => [
                    'w' => 1.7143,
                ],
                'fa-hourglass-end' => [
                    'w' => 1.7143,
                ],
                'fa-hourglass-half' => [
                    'w' => 1.7143,
                ],
                'fa-hourglass-o' => [
                    'w' => 1.7143,
                ],
                'fa-hourglass-start' => [
                    'w' => 1.7143,
                ],
                'fa-houzz' => [
                    'w' => 1.1442,
                ],
                'fa-html5' => [
                    'w' => 1.5718,
                ],
                'fa-i-cursor' => [
                    'w' => 1.1442,
                ],
                'fa-id-badge' => [
                    'w' => 1.4292,
                ],
                'fa-id-card' => [
                    'w' => 2.2864,
                ],
                'fa-id-card-o' => [
                    'w' => 2.2864,
                ],
                'fa-ils' => [
                    'w' => 1.7143,
                ],
                'fa-imdb' => [
                    'w' => 1.7143,
                ],
                'fa-inbox' => [
                    'w' => 1.7143,
                ],
                'fa-indent' => [
                    'w' => 1.9994,
                ],
                'fa-industry' => [
                    'w' => 1.9994,
                ],
                'fa-info' => [
                    'w' => 0.7146,
                ],
                'fa-info-circle' => [
                    'w' => 1.7143,
                ],
                'fa-inr' => [
                    'w' => 1.0036,
                ],
                'fa-instagram' => [
                    'w' => 1.7143,
                ],
                'fa-internet-explorer' => [
                    'w' => 1.9994,
                ],
                'fa-ioxhost' => [
                    'w' => 2.2864,
                ],
                'fa-italic' => [
                    'w' => 1.1442,
                ],
                'fa-joomla' => [
                    'w' => 1.7143,
                ],
                'fa-jpy' => [
                    'w' => 1.1461,
                ],
                'fa-jsfiddle' => [
                    'w' => 2.2864,
                ],
                'fa-key' => [
                    'w' => 1.9994,
                ],
                'fa-keyboard-o' => [
                    'w' => 2.1438,
                ],
                'fa-krw' => [
                    'w' => 1.9994,
                ],
                'fa-language' => [
                    'w' => 1.7143,
                ],
                'fa-laptop' => [
                    'w' => 2.1438,
                ],
                'fa-lastfm' => [
                    'w' => 1.9994,
                ],
                'fa-lastfm-square' => [
                    'w' => 1.7143,
                ],
                'fa-leaf' => [
                    'w' => 1.9994,
                ],
                'fa-leanpub' => [
                    'w' => 2.2864,
                ],
                'fa-lemon-o' => [
                    'w' => 1.7143,
                ],
                'fa-level-down' => [
                    'w' => 1.1442,
                ],
                'fa-level-up' => [
                    'w' => 1.1442,
                ],
                'fa-life-ring' => [
                    'w' => 1.9994,
                ],
                'fa-lightbulb-o' => [
                    'w' => 1.1442,
                ],
                'fa-line-chart' => [
                    'w' => 2.2864,
                ],
                'fa-link' => [
                    'w' => 1.8568,
                ],
                'fa-linkedin' => [
                    'w' => 1.7143,
                ],
                'fa-linkedin-square' => [
                    'w' => 1.7143,
                ],
                'fa-linode' => [
                    'w' => 1.7143,
                ],
                'fa-linux' => [
                    'w' => 1.7143,
                ],
                'fa-list' => [
                    'w' => 1.9994,
                ],
                'fa-list-alt' => [
                    'w' => 1.9994,
                ],
                'fa-list-ol' => [
                    'w' => 1.9994,
                ],
                'fa-list-ul' => [
                    'w' => 1.9994,
                ],
                'fa-location-arrow' => [
                    'w' => 1.5718,
                ],
                'fa-lock' => [
                    'w' => 1.2867,
                ],
                'fa-long-arrow-down' => [
                    'w' => 0.8571,
                ],
                'fa-long-arrow-left' => [
                    'w' => 1.9994,
                ],
                'fa-long-arrow-right' => [
                    'w' => 1.9994,
                ],
                'fa-long-arrow-up' => [
                    'w' => 0.8571,
                ],
                'fa-low-vision' => [
                    'w' => 1.9994,
                ],
                'fa-magic' => [
                    'w' => 1.8568,
                ],
                'fa-magnet' => [
                    'w' => 1.7143,
                ],
                'fa-male' => [
                    'w' => 1.1442,
                ],
                'fa-map' => [
                    'w' => 1.9994,
                ],
                'fa-map-marker' => [
                    'w' => 1.1442,
                ],
                'fa-map-o' => [
                    'w' => 2.2864,
                ],
                'fa-map-pin' => [
                    'w' => 1.1442,
                ],
                'fa-map-signs' => [
                    'w' => 1.9994,
                ],
                'fa-mars' => [
                    'w' => 1.7143,
                ],
                'fa-mars-double' => [
                    'w' => 2.1438,
                ],
                'fa-mars-stroke' => [
                    'w' => 1.7143,
                ],
                'fa-mars-stroke-h' => [
                    'w' => 2.2864,
                ],
                'fa-mars-stroke-v' => [
                    'w' => 1.4292,
                ],
                'fa-maxcdn' => [
                    'w' => 1.9994,
                ],
                'fa-meanpath' => [
                    'w' => 1.7143,
                ],
                'fa-medium' => [
                    'w' => 1.9994,
                ],
                'fa-medkit' => [
                    'w' => 1.9994,
                ],
                'fa-meetup' => [
                    'w' => 2.1438,
                ],
                'fa-meh-o' => [
                    'w' => 1.7143,
                ],
                'fa-mercury' => [
                    'w' => 1.4292,
                ],
                'fa-microchip' => [
                    'w' => 1.7143,
                ],
                'fa-microphone' => [
                    'w' => 1.2867,
                ],
                'fa-microphone-slash' => [
                    'w' => 1.5718,
                ],
                'fa-minus' => [
                    'w' => 1.5718,
                ],
                'fa-minus-circle' => [
                    'w' => 1.7143,
                ],
                'fa-minus-square' => [
                    'w' => 1.7143,
                ],
                'fa-minus-square-o' => [
                    'w' => 1.5718,
                ],
                'fa-mixcloud' => [
                    'w' => 2.5714,
                ],
                'fa-mobile' => [
                    'w' => 0.8571,
                ],
                'fa-modx' => [
                    'w' => 1.9994,
                ],
                'fa-money' => [
                    'w' => 2.1438,
                ],
                'fa-moon-o' => [
                    'w' => 1.7143,
                ],
                'fa-motorcycle' => [
                    'w' => 2.5714,
                ],
                'fa-mouse-pointer' => [
                    'w' => 1.4292,
                ],
                'fa-music' => [
                    'w' => 1.7143,
                ],
                'fa-neuter' => [
                    'w' => 1.4292,
                ],
                'fa-newspaper-o' => [
                    'w' => 2.2864,
                ],
                'fa-object-group' => [
                    'w' => 2.2864,
                ],
                'fa-object-ungroup' => [
                    'w' => 2.5714,
                ],
                'fa-odnoklassniki' => [
                    'w' => 1.4292,
                ],
                'fa-odnoklassniki-square' => [
                    'w' => 1.7143,
                ],
                'fa-opencart' => [
                    'w' => 2.5714,
                ],
                'fa-openid' => [
                    'w' => 1.9994,
                ],
                'fa-opera' => [
                    'w' => 1.9994,
                ],
                'fa-optin-monster' => [
                    'w' => 2.5617,
                ],
                'fa-outdent' => [
                    'w' => 1.9994,
                ],
                'fa-pagelines' => [
                    'w' => 1.5718,
                ],
                'fa-paint-brush' => [
                    'w' => 1.9994,
                ],
                'fa-paper-plane' => [
                    'w' => 1.9994,
                ],
                'fa-paper-plane-o' => [
                    'w' => 1.9994,
                ],
                'fa-paperclip' => [
                    'w' => 1.5718,
                ],
                'fa-paragraph' => [
                    'w' => 1.4292,
                ],
                'fa-pause' => [
                    'w' => 1.7143,
                ],
                'fa-pause-circle' => [
                    'w' => 1.7143,
                ],
                'fa-pause-circle-o' => [
                    'w' => 1.7143,
                ],
                'fa-paw' => [
                    'w' => 1.8568,
                ],
                'fa-paypal' => [
                    'w' => 1.7143,
                ],
                'fa-pencil' => [
                    'w' => 1.7143,
                ],
                'fa-pencil-square' => [
                    'w' => 1.7143,
                ],
                'fa-pencil-square-o' => [
                    'w' => 1.9994,
                ],
                'fa-percent' => [
                    'w' => 1.7143,
                ],
                'fa-phone' => [
                    'w' => 1.5718,
                ],
                'fa-phone-square' => [
                    'w' => 1.7143,
                ],
                'fa-picture-o' => [
                    'w' => 2.1438,
                ],
                'fa-pie-chart' => [
                    'w' => 1.9994,
                ],
                'fa-pied-piper' => [
                    'w' => 2.5714,
                ],
                'fa-pied-piper-alt' => [
                    'w' => 2.2746,
                ],
                'fa-pied-piper-pp' => [
                    'w' => 1.7143,
                ],
                'fa-pinterest' => [
                    'w' => 1.7143,
                ],
                'fa-pinterest-p' => [
                    'w' => 1.4292,
                ],
                'fa-pinterest-square' => [
                    'w' => 1.7143,
                ],
                'fa-plane' => [
                    'w' => 1.5718,
                ],
                'fa-play' => [
                    'w' => 1.5718,
                ],
                'fa-play-circle' => [
                    'w' => 1.7143,
                ],
                'fa-play-circle-o' => [
                    'w' => 1.7143,
                ],
                'fa-plug' => [
                    'w' => 1.9994,
                ],
                'fa-plus' => [
                    'w' => 1.5718,
                ],
                'fa-plus-circle' => [
                    'w' => 1.7143,
                ],
                'fa-plus-square' => [
                    'w' => 1.7143,
                ],
                'fa-plus-square-o' => [
                    'w' => 1.5718,
                ],
                'fa-podcast' => [
                    'w' => 1.7143,
                ],
                'fa-power-off' => [
                    'w' => 1.7143,
                ],
                'fa-print' => [
                    'w' => 1.8568,
                ],
                'fa-product-hunt' => [
                    'w' => 1.9994,
                ],
                'fa-puzzle-piece' => [
                    'w' => 1.8568,
                ],
                'fa-qq' => [
                    'w' => 1.9994,
                ],
                'fa-qrcode' => [
                    'w' => 1.5718,
                ],
                'fa-question' => [
                    'w' => 1.1442,
                ],
                'fa-question-circle' => [
                    'w' => 1.7143,
                ],
                'fa-question-circle-o' => [
                    'w' => 1.7143,
                ],
                'fa-quora' => [
                    'w' => 1.9994,
                ],
                'fa-quote-left' => [
                    'w' => 1.8568,
                ],
                'fa-quote-right' => [
                    'w' => 1.8568,
                ],
                'fa-random' => [
                    'w' => 1.9994,
                ],
                'fa-ravelry' => [
                    'w' => 2.4289,
                ],
                'fa-rebel' => [
                    'w' => 1.9994,
                ],
                'fa-recycle' => [
                    'w' => 1.9994,
                ],
                'fa-reddit' => [
                    'w' => 1.9994,
                ],
                'fa-reddit-alien' => [
                    'w' => 1.9994,
                ],
                'fa-reddit-square' => [
                    'w' => 1.7143,
                ],
                'fa-refresh' => [
                    'w' => 1.7143,
                ],
                'fa-registered' => [
                    'w' => 1.9994,
                ],
                'fa-renren' => [
                    'w' => 1.7143,
                ],
                'fa-repeat' => [
                    'w' => 1.7143,
                ],
                'fa-reply' => [
                    'w' => 1.9994,
                ],
                'fa-reply-all' => [
                    'w' => 1.9994,
                ],
                'fa-retweet' => [
                    'w' => 2.1438,
                ],
                'fa-road' => [
                    'w' => 2.1438,
                ],
                'fa-rocket' => [
                    'w' => 1.8568,
                ],
                'fa-rss' => [
                    'w' => 1.5718,
                ],
                'fa-rss-square' => [
                    'w' => 1.7143,
                ],
                'fa-rub' => [
                    'w' => 1.4292,
                ],
                'fa-safari' => [
                    'w' => 1.9994,
                ],
                'fa-scissors' => [
                    'w' => 1.9994,
                ],
                'fa-scribd' => [
                    'w' => 1.7143,
                ],
                'fa-search' => [
                    'w' => 1.8568,
                ],
                'fa-search-minus' => [
                    'w' => 1.8568,
                ],
                'fa-search-plus' => [
                    'w' => 1.8568,
                ],
                'fa-sellsy' => [
                    'w' => 2.2864,
                ],
                'fa-server' => [
                    'w' => 1.9994,
                ],
                'fa-share' => [
                    'w' => 1.9994,
                ],
                'fa-share-alt' => [
                    'w' => 1.7143,
                ],
                'fa-share-alt-square' => [
                    'w' => 1.7143,
                ],
                'fa-share-square' => [
                    'w' => 1.7143,
                ],
                'fa-share-square-o' => [
                    'w' => 1.8568,
                ],
                'fa-shield' => [
                    'w' => 1.4292,
                ],
                'fa-ship' => [
                    'w' => 2.2864,
                ],
                'fa-shirtsinbulk' => [
                    'w' => 1.7143,
                ],
                'fa-shopping-bag' => [
                    'w' => 1.9994,
                ],
                'fa-shopping-basket' => [
                    'w' => 2.2864,
                ],
                'fa-shopping-cart' => [
                    'w' => 1.8568,
                ],
                'fa-shower' => [
                    'w' => 2.1438,
                ],
                'fa-sign-in' => [
                    'w' => 1.7143,
                ],
                'fa-sign-language' => [
                    'w' => 1.8568,
                ],
                'fa-sign-out' => [
                    'w' => 1.8568,
                ],
                'fa-signal' => [
                    'w' => 1.9994,
                ],
                'fa-simplybuilt' => [
                    'w' => 2.2864,
                ],
                'fa-sitemap' => [
                    'w' => 1.9994,
                ],
                'fa-skyatlas' => [
                    'w' => 2.2864,
                ],
                'fa-skype' => [
                    'w' => 1.7143,
                ],
                'fa-slack' => [
                    'w' => 1.8568,
                ],
                'fa-sliders' => [
                    'w' => 1.7143,
                ],
                'fa-slideshare' => [
                    'w' => 1.9994,
                ],
                'fa-smile-o' => [
                    'w' => 1.7143,
                ],
                'fa-snapchat' => [
                    'w' => 1.7143,
                ],
                'fa-snapchat-ghost' => [
                    'w' => 1.8568,
                ],
                'fa-snapchat-square' => [
                    'w' => 1.7143,
                ],
                'fa-snowflake-o' => [
                    'w' => 1.8568,
                ],
                'fa-sort' => [
                    'w' => 1.1442,
                ],
                'fa-sort-alpha-asc' => [
                    'w' => 1.8568,
                ],
                'fa-sort-alpha-desc' => [
                    'w' => 1.8568,
                ],
                'fa-sort-amount-asc' => [
                    'w' => 1.9994,
                ],
                'fa-sort-amount-desc' => [
                    'w' => 1.9994,
                ],
                'fa-sort-asc' => [
                    'w' => 1.1442,
                ],
                'fa-sort-desc' => [
                    'w' => 1.1442,
                ],
                'fa-sort-numeric-asc' => [
                    'w' => 1.7143,
                ],
                'fa-sort-numeric-desc' => [
                    'w' => 1.7143,
                ],
                'fa-soundcloud' => [
                    'w' => 2.5714,
                ],
                'fa-space-shuttle' => [
                    'w' => 2.4289,
                ],
                'fa-spinner' => [
                    'w' => 1.9994,
                ],
                'fa-spoon' => [
                    'w' => 0.8571,
                ],
                'fa-spotify' => [
                    'w' => 1.7143,
                ],
                'fa-square' => [
                    'w' => 1.7143,
                ],
                'fa-square-o' => [
                    'w' => 1.5718,
                ],
                'fa-stack-exchange' => [
                    'w' => 1.4292,
                ],
                'fa-stack-overflow' => [
                    'w' => 1.7143,
                ],
                'fa-star' => [
                    'w' => 1.8568,
                ],
                'fa-star-half' => [
                    'w' => 0.9997,
                ],
                'fa-star-half-o' => [
                    'w' => 1.8568,
                ],
                'fa-star-o' => [
                    'w' => 1.8568,
                ],
                'fa-steam' => [
                    'w' => 1.9994,
                ],
                'fa-steam-square' => [
                    'w' => 1.7143,
                ],
                'fa-step-backward' => [
                    'w' => 1.1442,
                ],
                'fa-step-forward' => [
                    'w' => 1.1442,
                ],
                'fa-stethoscope' => [
                    'w' => 1.5718,
                ],
                'fa-sticky-note' => [
                    'w' => 1.7143,
                ],
                'fa-sticky-note-o' => [
                    'w' => 1.7143,
                ],
                'fa-stop' => [
                    'w' => 1.7143,
                ],
                'fa-stop-circle' => [
                    'w' => 1.7143,
                ],
                'fa-stop-circle-o' => [
                    'w' => 1.7143,
                ],
                'fa-street-view' => [
                    'w' => 1.7143,
                ],
                'fa-strikethrough' => [
                    'w' => 1.9994,
                ],
                'fa-stumbleupon' => [
                    'w' => 2.1438,
                ],
                'fa-stumbleupon-circle' => [
                    'w' => 1.7143,
                ],
                'fa-subscript' => [
                    'w' => 1.7143,
                ],
                'fa-subway' => [
                    'w' => 1.7143,
                ],
                'fa-suitcase' => [
                    'w' => 1.9994,
                ],
                'fa-sun-o' => [
                    'w' => 1.9994,
                ],
                'fa-superpowers' => [
                    'w' => 1.9994,
                ],
                'fa-superscript' => [
                    'w' => 1.7143,
                ],
                'fa-table' => [
                    'w' => 1.8568,
                ],
                'fa-tablet' => [
                    'w' => 1.2867,
                ],
                'fa-tachometer' => [
                    'w' => 1.9994,
                ],
                'fa-tag' => [
                    'w' => 1.7143,
                ],
                'fa-tags' => [
                    'w' => 2.1438,
                ],
                'fa-tasks' => [
                    'w' => 1.9994,
                ],
                'fa-taxi' => [
                    'w' => 2.2864,
                ],
                'fa-telegram' => [
                    'w' => 1.9994,
                ],
                'fa-television' => [
                    'w' => 2.2864,
                ],
                'fa-tencent-weibo' => [
                    'w' => 1.4292,
                ],
                'fa-terminal' => [
                    'w' => 1.8568,
                ],
                'fa-text-height' => [
                    'w' => 1.9994,
                ],
                'fa-text-width' => [
                    'w' => 1.7143,
                ],
                'fa-th' => [
                    'w' => 1.9994,
                ],
                'fa-th-large' => [
                    'w' => 1.8568,
                ],
                'fa-th-list' => [
                    'w' => 1.9994,
                ],
                'fa-themeisle' => [
                    'w' => 1.9994,
                ],
                'fa-thermometer-empty' => [
                    'w' => 1.1442,
                ],
                'fa-thermometer-full' => [
                    'w' => 1.1442,
                ],
                'fa-thermometer-half' => [
                    'w' => 1.1442,
                ],
                'fa-thermometer-quarter' => [
                    'w' => 1.1442,
                ],
                'fa-thermometer-three-quarters' => [
                    'w' => 1.1442,
                ],
                'fa-thumb-tack' => [
                    'w' => 1.2867,
                ],
                'fa-thumbs-down' => [
                    'w' => 1.8568,
                ],
                'fa-thumbs-o-down' => [
                    'w' => 1.7143,
                ],
                'fa-thumbs-o-up' => [
                    'w' => 1.7143,
                ],
                'fa-thumbs-up' => [
                    'w' => 1.8568,
                ],
                'fa-ticket' => [
                    'w' => 1.9994,
                ],
                'fa-times' => [
                    'w' => 1.5718,
                ],
                'fa-times-circle' => [
                    'w' => 1.7143,
                ],
                'fa-times-circle-o' => [
                    'w' => 1.7143,
                ],
                'fa-tint' => [
                    'w' => 1.1442,
                ],
                'fa-toggle-off' => [
                    'w' => 2.2864,
                ],
                'fa-toggle-on' => [
                    'w' => 2.2864,
                ],
                'fa-trademark' => [
                    'w' => 2.2024,
                ],
                'fa-train' => [
                    'w' => 1.7143,
                ],
                'fa-transgender' => [
                    'w' => 1.7143,
                ],
                'fa-transgender-alt' => [
                    'w' => 1.9994,
                ],
                'fa-trash' => [
                    'w' => 1.5718,
                ],
                'fa-trash-o' => [
                    'w' => 1.5718,
                ],
                'fa-tree' => [
                    'w' => 1.7143,
                ],
                'fa-trello' => [
                    'w' => 1.7143,
                ],
                'fa-tripadvisor' => [
                    'w' => 2.5714,
                ],
                'fa-trophy' => [
                    'w' => 1.8568,
                ],
                'fa-truck' => [
                    'w' => 1.9994,
                ],
                'fa-try' => [
                    'w' => 1.2867,
                ],
                'fa-tty' => [
                    'w' => 1.9994,
                ],
                'fa-tumblr' => [
                    'w' => 1.1442,
                ],
                'fa-tumblr-square' => [
                    'w' => 1.7143,
                ],
                'fa-twitch' => [
                    'w' => 1.9994,
                ],
                'fa-twitter' => [
                    'w' => 1.8568,
                ],
                'fa-twitter-square' => [
                    'w' => 1.7143,
                ],
                'fa-umbrella' => [
                    'w' => 1.8568,
                ],
                'fa-underline' => [
                    'w' => 1.7143,
                ],
                'fa-undo' => [
                    'w' => 1.7143,
                ],
                'fa-universal-access' => [
                    'w' => 1.9994,
                ],
                'fa-university' => [
                    'w' => 2.2864,
                ],
                'fa-unlock' => [
                    'w' => 1.8568,
                ],
                'fa-unlock-alt' => [
                    'w' => 1.2867,
                ],
                'fa-upload' => [
                    'w' => 1.8568,
                ],
                'fa-usb' => [
                    'w' => 2.5714,
                ],
                'fa-usd' => [
                    'w' => 1.1442,
                ],
                'fa-user' => [
                    'w' => 1.4292,
                ],
                'fa-user-circle' => [
                    'w' => 1.9994,
                ],
                'fa-user-circle-o' => [
                    'w' => 1.9994,
                ],
                'fa-user-md' => [
                    'w' => 1.5718,
                ],
                'fa-user-o' => [
                    'w' => 1.7143,
                ],
                'fa-user-plus' => [
                    'w' => 2.2864,
                ],
                'fa-user-secret' => [
                    'w' => 1.7143,
                ],
                'fa-user-times' => [
                    'w' => 2.2864,
                ],
                'fa-users' => [
                    'w' => 2.1438,
                ],
                'fa-venus' => [
                    'w' => 1.4292,
                ],
                'fa-venus-double' => [
                    'w' => 1.9994,
                ],
                'fa-venus-mars' => [
                    'w' => 2.2864,
                ],
                'fa-viacoin' => [
                    'w' => 1.7143,
                ],
                'fa-viadeo' => [
                    'w' => 1.4292,
                ],
                'fa-viadeo-square' => [
                    'w' => 1.7143,
                ],
                'fa-video-camera' => [
                    'w' => 1.9994,
                ],
                'fa-vimeo' => [
                    'w' => 1.9994,
                ],
                'fa-vimeo-square' => [
                    'w' => 1.7143,
                ],
                'fa-vine' => [
                    'w' => 1.7143,
                ],
                'fa-vk' => [
                    'w' => 2.1438,
                ],
                'fa-volume-control-phone' => [
                    'w' => 1.5718,
                ],
                'fa-volume-down' => [
                    'w' => 1.2867,
                ],
                'fa-volume-off' => [
                    'w' => 0.8571,
                ],
                'fa-volume-up' => [
                    'w' => 1.8568,
                ],
                'fa-weibo' => [
                    'w' => 1.9994,
                ],
                'fa-weixin' => [
                    'w' => 2.2864,
                ],
                'fa-whatsapp' => [
                    'w' => 1.7143,
                ],
                'fa-wheelchair' => [
                    'w' => 1.8568,
                ],
                'fa-wheelchair-alt' => [
                    'w' => 1.7143,
                ],
                'fa-wifi' => [
                    'w' => 2.2864,
                ],
                'fa-wikipedia-w' => [
                    'w' => 2.5714,
                ],
                'fa-window-close' => [
                    'w' => 1.9994,
                ],
                'fa-window-close-o' => [
                    'w' => 1.9994,
                ],
                'fa-window-maximize' => [
                    'w' => 1.9994,
                ],
                'fa-window-minimize' => [
                    'w' => 1.9994,
                ],
                'fa-window-restore' => [
                    'w' => 2.2864,
                ],
                'fa-windows' => [
                    'w' => 1.8568,
                ],
                'fa-wordpress' => [
                    'w' => 1.9994,
                ],
                'fa-wpbeginner' => [
                    'w' => 1.9994,
                ],
                'fa-wpexplorer' => [
                    'w' => 1.9994,
                ],
                'fa-wpforms' => [
                    'w' => 1.7143,
                ],
                'fa-wrench' => [
                    'w' => 1.8568,
                ],
                'fa-xing' => [
                    'w' => 1.5718,
                ],
                'fa-xing-square' => [
                    'w' => 1.7143,
                ],
                'fa-y-combinator' => [
                    'w' => 1.7143,
                ],
                'fa-yahoo' => [
                    'w' => 1.7143,
                ],
                'fa-yelp' => [
                    'w' => 1.7143,
                ],
                'fa-yoast' => [
                    'w' => 1.8568,
                ],
                'fa-youtube' => [
                    'w' => 1.7143,
                ],
                'fa-youtube-play' => [
                    'w' => 1.9994,
                ],
                'fa-youtube-square' => [
                    'w' => 1.7143,
                ],
            ],
            'stevotvr.flair.img_path' => './images/flair/',
            'tables' => [
                'acl_groups' => 'phpbb_acl_groups',
                'acl_options' => 'phpbb_acl_options',
                'acl_roles' => 'phpbb_acl_roles',
                'acl_roles_data' => 'phpbb_acl_roles_data',
                'acl_users' => 'phpbb_acl_users',
                'attachments' => 'phpbb_attachments',
                'auth_provider_oauth_token_storage' => 'phpbb_oauth_tokens',
                'auth_provider_oauth_states' => 'phpbb_oauth_states',
                'auth_provider_oauth_account_assoc' => 'phpbb_oauth_accounts',
                'banlist' => 'phpbb_banlist',
                'bbcodes' => 'phpbb_bbcodes',
                'bookmarks' => 'phpbb_bookmarks',
                'bots' => 'phpbb_bots',
                'captcha_qa_questions' => 'phpbb_captcha_questions',
                'captcha_qa_answers' => 'phpbb_captcha_answers',
                'captcha_qa_confirm' => 'phpbb_qa_confirm',
                'config' => 'phpbb_config',
                'config_text' => 'phpbb_config_text',
                'confirm' => 'phpbb_confirm',
                'disallow' => 'phpbb_disallow',
                'drafts' => 'phpbb_drafts',
                'ext' => 'phpbb_ext',
                'extensions' => 'phpbb_extensions',
                'extension_groups' => 'phpbb_extension_groups',
                'forums' => 'phpbb_forums',
                'forums_access' => 'phpbb_forums_access',
                'forums_track' => 'phpbb_forums_track',
                'forums_watch' => 'phpbb_forums_watch',
                'groups' => 'phpbb_groups',
                'icons' => 'phpbb_icons',
                'lang' => 'phpbb_lang',
                'log' => 'phpbb_log',
                'login_attempts' => 'phpbb_login_attempts',
                'migrations' => 'phpbb_migrations',
                'moderator_cache' => 'phpbb_moderator_cache',
                'modules' => 'phpbb_modules',
                'notification_emails' => 'phpbb_notification_emails',
                'notification_types' => 'phpbb_notification_types',
                'notifications' => 'phpbb_notifications',
                'poll_options' => 'phpbb_poll_options',
                'poll_votes' => 'phpbb_poll_votes',
                'posts' => 'phpbb_posts',
                'privmsgs' => 'phpbb_privmsgs',
                'privmsgs_folder' => 'phpbb_privmsgs_folder',
                'privmsgs_rules' => 'phpbb_privmsgs_rules',
                'privmsgs_to' => 'phpbb_privmsgs_to',
                'profile_fields' => 'phpbb_profile_fields',
                'profile_fields_data' => 'phpbb_profile_fields_data',
                'profile_fields_options_language' => 'phpbb_profile_fields_lang',
                'profile_fields_language' => 'phpbb_profile_lang',
                'ranks' => 'phpbb_ranks',
                'reports' => 'phpbb_reports',
                'reports_reasons' => 'phpbb_reports_reasons',
                'search_results' => 'phpbb_search_results',
                'search_wordlist' => 'phpbb_search_wordlist',
                'search_wordmatch' => 'phpbb_search_wordmatch',
                'sessions' => 'phpbb_sessions',
                'sessions_keys' => 'phpbb_sessions_keys',
                'sitelist' => 'phpbb_sitelist',
                'smilies' => 'phpbb_smilies',
                'sphinx' => 'phpbb_sphinx',
                'styles' => 'phpbb_styles',
                'styles_template' => 'phpbb_styles_template',
                'styles_template_data' => 'phpbb_styles_template_data',
                'styles_theme' => 'phpbb_styles_theme',
                'styles_imageset' => 'phpbb_styles_imageset',
                'styles_imageset_data' => 'phpbb_styles_imageset_data',
                'teampage' => 'phpbb_teampage',
                'topics' => 'phpbb_topics',
                'topics_posted' => 'phpbb_topics_posted',
                'topics_track' => 'phpbb_topics_track',
                'topics_watch' => 'phpbb_topics_watch',
                'user_group' => 'phpbb_user_group',
                'user_notifications' => 'phpbb_user_notifications',
                'users' => 'phpbb_users',
                'warnings' => 'phpbb_warnings',
                'words' => 'phpbb_words',
                'zebra' => 'phpbb_zebra',
                'tfa_registration' => 'phpbb_tfa_registration',
                'tfa_otp_registration' => 'phpbb_tfa_otp_reg',
                'tfa_backup_registration' => 'phpbb_tfa_back_reg',
                'autogroups_rules' => 'phpbb_autogroups_rules',
                'autogroups_types' => 'phpbb_autogroups_types',
                'topic_prefixes' => 'phpbb_topic_prefixes',
                'flair' => 'phpbb_flair',
                'flair_categories' => 'phpbb_flair_cats',
                'flair_favorites' => 'phpbb_flair_favs',
                'flair_groups' => 'phpbb_flair_groups',
                'flair_notifications' => 'phpbb_flair_notif',
                'flair_triggers' => 'phpbb_flair_triggers',
                'flair_users' => 'phpbb_flair_users',
            ],
            'core.adm_relative_path' => 'adm/',
            'core.table_prefix' => 'phpbb_',
            'cache.driver.class' => 'phpbb\\cache\\driver\\file',
            'dbal.new_link' => false,
        ];
    }
}

class lexer_6d586c2 extends \phpbb\template\twig\lexer implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder6d586c2 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6d586c2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6d586c2 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function tokenize(\Twig\Source $source)
    {
        $this->initializer6d586c2 && ($this->initializer6d586c2->__invoke($valueHolder6d586c2, $this, 'tokenize', array('source' => $source), $this->initializer6d586c2) || 1) && $this->valueHolder6d586c2 = $valueHolder6d586c2;

        return $this->valueHolder6d586c2->tokenize($source);
    }

    /**
     * {@inheritDoc}
     */
    public function fix_begin_tokens($code, $parent_nodes = [])
    {
        $this->initializer6d586c2 && ($this->initializer6d586c2->__invoke($valueHolder6d586c2, $this, 'fix_begin_tokens', array('code' => $code, 'parent_nodes' => $parent_nodes), $this->initializer6d586c2) || 1) && $this->valueHolder6d586c2 = $valueHolder6d586c2;

        return $this->valueHolder6d586c2->fix_begin_tokens($code, $parent_nodes);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();

        \Closure::bind(function (\Twig\Lexer $instance) {
            unset($instance->tokens, $instance->code, $instance->cursor, $instance->lineno, $instance->end, $instance->state, $instance->states, $instance->brackets, $instance->env, $instance->source, $instance->options, $instance->regexes, $instance->position, $instance->positions, $instance->currentVarBlockLine);
        }, $instance, 'Twig\\Lexer')->__invoke($instance);

        $instance->initializer6d586c2 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Twig\Environment $env, array $options = [])
    {
        static $reflection;

        if (! $this->valueHolder6d586c2) {
            $reflection = $reflection ?: new \ReflectionClass('phpbb\\template\\twig\\lexer');
            $this->valueHolder6d586c2 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Twig\Lexer $instance) {
            unset($instance->tokens, $instance->code, $instance->cursor, $instance->lineno, $instance->end, $instance->state, $instance->states, $instance->brackets, $instance->env, $instance->source, $instance->options, $instance->regexes, $instance->position, $instance->positions, $instance->currentVarBlockLine);
        }, $this, 'Twig\\Lexer')->__invoke($this);

        }

        $this->valueHolder6d586c2->__construct($env, $options);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer6d586c2 && ($this->initializer6d586c2->__invoke($valueHolder6d586c2, $this, '__get', ['name' => $name], $this->initializer6d586c2) || 1) && $this->valueHolder6d586c2 = $valueHolder6d586c2;

        if (isset(self::$publicProperties6d586c2[$name])) {
            return $this->valueHolder6d586c2->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6d586c2;

            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder6d586c2;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer6d586c2 && ($this->initializer6d586c2->__invoke($valueHolder6d586c2, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6d586c2) || 1) && $this->valueHolder6d586c2 = $valueHolder6d586c2;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6d586c2;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder6d586c2;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer6d586c2 && ($this->initializer6d586c2->__invoke($valueHolder6d586c2, $this, '__isset', array('name' => $name), $this->initializer6d586c2) || 1) && $this->valueHolder6d586c2 = $valueHolder6d586c2;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6d586c2;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder6d586c2;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer6d586c2 && ($this->initializer6d586c2->__invoke($valueHolder6d586c2, $this, '__unset', array('name' => $name), $this->initializer6d586c2) || 1) && $this->valueHolder6d586c2 = $valueHolder6d586c2;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6d586c2;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder6d586c2;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer6d586c2 && ($this->initializer6d586c2->__invoke($valueHolder6d586c2, $this, '__clone', array(), $this->initializer6d586c2) || 1) && $this->valueHolder6d586c2 = $valueHolder6d586c2;

        $this->valueHolder6d586c2 = clone $this->valueHolder6d586c2;
    }

    public function __sleep()
    {
        $this->initializer6d586c2 && ($this->initializer6d586c2->__invoke($valueHolder6d586c2, $this, '__sleep', array(), $this->initializer6d586c2) || 1) && $this->valueHolder6d586c2 = $valueHolder6d586c2;

        return array('valueHolder6d586c2');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Twig\Lexer $instance) {
            unset($instance->tokens, $instance->code, $instance->cursor, $instance->lineno, $instance->end, $instance->state, $instance->states, $instance->brackets, $instance->env, $instance->source, $instance->options, $instance->regexes, $instance->position, $instance->positions, $instance->currentVarBlockLine);
        }, $this, 'Twig\\Lexer')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer6d586c2 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer6d586c2;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer6d586c2 && ($this->initializer6d586c2->__invoke($valueHolder6d586c2, $this, 'initializeProxy', array(), $this->initializer6d586c2) || 1) && $this->valueHolder6d586c2 = $valueHolder6d586c2;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6d586c2;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6d586c2;
    }


}
