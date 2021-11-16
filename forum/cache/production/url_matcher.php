<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class phpbb_url_matcher extends Symfony\Component\Routing\Matcher\UrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        // phpbb_cron_run
        if (0 === strpos($pathinfo, '/cron') && preg_match('#^/cron/(?P<cron_type>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'phpbb_cron_run']), array (  '_controller' => 'cron.controller:handle',));
        }

        // phpbb_collapsiblecategories_main_controller
        if (0 === strpos($pathinfo, '/collapse') && preg_match('#^/collapse(?:/(?P<forum_id>\\w+))?$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'phpbb_collapsiblecategories_main_controller']), array (  '_controller' => 'phpbb.collapsiblecategories.controller:handle',  'forum_id' => 0,));
        }

        if (0 === strpos($pathinfo, '/feed')) {
            if (0 === strpos($pathinfo, '/feed/forum')) {
                // phpbb_feed_forums
                if ('/feed/forums' === $pathinfo) {
                    return array (  '_controller' => 'phpbb.feed.controller:forums',  '_route' => 'phpbb_feed_forums',);
                }

                // phpbb_feed_forum
                if (preg_match('#^/feed/forum/(?P<forum_id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'phpbb_feed_forum']), array (  '_controller' => 'phpbb.feed.controller:forum',));
                }

            }

            // phpbb_feed_news
            if ('/feed/news' === $pathinfo) {
                return array (  '_controller' => 'phpbb.feed.controller:news',  '_route' => 'phpbb_feed_news',);
            }

            if (0 === strpos($pathinfo, '/feed/topics')) {
                // phpbb_feed_topics
                if ('/feed/topics' === $pathinfo) {
                    return array (  '_controller' => 'phpbb.feed.controller:topics',  '_route' => 'phpbb_feed_topics',);
                }

                // phpbb_feed_topics_active
                if ('/feed/topics_active' === $pathinfo) {
                    return array (  '_controller' => 'phpbb.feed.controller:topics_active',  '_route' => 'phpbb_feed_topics_active',);
                }

                // phpbb_feed_topics_new
                if ('/feed/topics_new' === $pathinfo) {
                    return array (  '_controller' => 'phpbb.feed.controller:topics_new',  '_route' => 'phpbb_feed_topics_new',);
                }

            }

            // phpbb_feed_topic
            if (0 === strpos($pathinfo, '/feed/topic') && preg_match('#^/feed/topic/(?P<topic_id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'phpbb_feed_topic']), array (  '_controller' => 'phpbb.feed.controller:topic',));
            }

            // phpbb_feed_overall
            if (preg_match('#^/feed/(?P<mode>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'phpbb_feed_overall']), array (  '_controller' => 'phpbb.feed.controller:overall',));
            }

            // phpbb_feed_index
            if ('/feed' === $pathinfo) {
                return array (  '_controller' => 'phpbb.feed.controller:overall',  '_route' => 'phpbb_feed_index',);
            }

        }

        // stevotvr_flair_legend
        if ('/flair' === $pathinfo) {
            return array (  '_controller' => 'stevotvr.flair.controller.legend:handle',  '_route' => 'stevotvr_flair_legend',);
        }

        // phpbb_help_bbcode_controller
        if ('/help/bbcode' === $pathinfo) {
            return array (  '_controller' => 'phpbb.help.controller.bbcode:handle',  '_route' => 'phpbb_help_bbcode_controller',);
        }

        // phpbb_help_faq_controller
        if ('/help/faq' === $pathinfo) {
            return array (  '_controller' => 'phpbb.help.controller.faq:handle',  '_route' => 'phpbb_help_faq_controller',);
        }

        if (0 === strpos($pathinfo, '/p')) {
            // phpbb_report_pm_controller
            if (0 === strpos($pathinfo, '/pm') && preg_match('#^/pm/(?P<id>\\d+)/report$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'phpbb_report_pm_controller']), array (  '_controller' => 'phpbb.report.controller:handle',  'mode' => 'pm',));
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_phpbb_report_pm_controller;
                }

                return $ret;
            }
            not_phpbb_report_pm_controller:

            // phpbb_report_post_controller
            if (0 === strpos($pathinfo, '/post') && preg_match('#^/post/(?P<id>\\d+)/report$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'phpbb_report_post_controller']), array (  '_controller' => 'phpbb.report.controller:handle',  'mode' => 'post',));
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_phpbb_report_post_controller;
                }

                return $ret;
            }
            not_phpbb_report_post_controller:

            // paul999_tfa_read_controller_submit
            if (0 === strpos($pathinfo, '/paul999/tfa/save') && preg_match('#^/paul999/tfa/save/(?P<user_id>\\d+)/(?P<admin>\\d+)/(?P<auto_login>\\d+)/(?P<viewonline>\\d+)/(?P<class>[^/]++)/$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'paul999_tfa_read_controller_submit']), array (  '_controller' => 'paul999.tfa.controller:submit',));
            }

        }

        // phpbb_ucp_reset_password_controller
        if ('/user/reset_password' === $pathinfo) {
            return array (  '_controller' => 'phpbb.ucp.controller.reset_password:reset',  '_route' => 'phpbb_ucp_reset_password_controller',);
        }

        // phpbb_ucp_forgot_password_controller
        if ('/user/forgot_password' === $pathinfo) {
            return array (  '_controller' => 'phpbb.ucp.controller.reset_password:request',  '_route' => 'phpbb_ucp_forgot_password_controller',);
        }

        // phpbb_boardannouncements_controller
        if ('/boardannouncements/close' === $pathinfo) {
            return array (  '_controller' => 'phpbb.boardannouncements.controller:close_announcement',  '_route' => 'phpbb_boardannouncements_controller',);
        }

        // vse_abbc3_bbcode_wizard
        if (0 === strpos($pathinfo, '/wizard/bbcode') && preg_match('#^/wizard/bbcode/(?P<mode>\\w+)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'vse_abbc3_bbcode_wizard']), array (  '_controller' => 'vse.abbc3.wizard:bbcode_wizard',));
        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
