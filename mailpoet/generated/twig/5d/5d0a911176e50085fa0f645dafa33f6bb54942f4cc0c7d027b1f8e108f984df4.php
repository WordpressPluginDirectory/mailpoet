<?php

if (!defined('ABSPATH')) exit;


use MailPoetVendor\Twig\Environment;
use MailPoetVendor\Twig\Error\LoaderError;
use MailPoetVendor\Twig\Error\RuntimeError;
use MailPoetVendor\Twig\Extension\CoreExtension;
use MailPoetVendor\Twig\Extension\SandboxExtension;
use MailPoetVendor\Twig\Markup;
use MailPoetVendor\Twig\Sandbox\SecurityError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedTagError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFilterError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFunctionError;
use MailPoetVendor\Twig\Source;
use MailPoetVendor\Twig\Template;

/* layout.html */
class __TwigTemplate_8581a8ede6c645c86df82d14a0f9727da4ff92aa0bb85d1970f9d5219782671e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'templates' => [$this, 'block_templates'],
            'container' => [$this, 'block_container'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'after_translations' => [$this, 'block_after_translations'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<!-- pre connect to 3d party to speed up page loading -->
<link rel=\"preconnect\" href=\"https://widget.docsbot.ai/\">
<link rel=\"dns-prefetch\" href=\"https://widget.docsbot.ai/\">
<link rel=\"preconnect\" href=\"http://cdn.mxpnl.com\">
<link rel=\"dns-prefetch\" href=\"http://cdn.mxpnl.com\">

<!-- system notices -->
<div id=\"mailpoet_notice_system\" class=\"mailpoet_notice\" style=\"display:none;\"></div>

<!-- handlebars templates -->
";
        // line 11
        yield from $this->unwrap()->yieldBlock('templates', $context, $blocks);
        // line 12
        yield "
<!-- main container -->
";
        // line 14
        yield from $this->unwrap()->yieldBlock('container', $context, $blocks);
        // line 35
        yield "
<script type=\"text/javascript\">
  var mailpoet_wp_locale = \"";
        // line 37
        yield $this->extensions['MailPoet\Twig\I18n']->getLocale();
        yield "\";
  var mailpoet_datetime_format = \"";
        // line 38
        yield $this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape($this->extensions['MailPoet\Twig\Functions']->getWPDateTimeFormat(), "js"), "html", null, true);
        yield "\";
  var mailpoet_date_format = \"";
        // line 39
        yield $this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape($this->extensions['MailPoet\Twig\Functions']->getWPDateFormat(), "js"), "html", null, true);
        yield "\";
  var mailpoet_time_format = \"";
        // line 40
        yield $this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape($this->extensions['MailPoet\Twig\Functions']->getWPTimeFormat(), "js"), "html", null, true);
        yield "\";
  var mailpoet_date_offset = ";
        // line 41
        yield json_encode(get_option("gmt_offset"));
        yield ";
  var mailpoet_version = \"";
        // line 42
        yield $this->extensions['MailPoet\Twig\Functions']->getMailPoetVersion();
        yield "\";
  var mailpoet_locale = \"";
        // line 43
        yield $this->extensions['MailPoet\Twig\Functions']->getTwoLettersLocale();
        yield "\";
  var mailpoet_wp_week_starts_on = \"";
        // line 44
        yield $this->extensions['MailPoet\Twig\Functions']->getWPStartOfWeek();
        yield "\";
  var mailpoet_urls = ";
        // line 45
        yield json_encode(($context["urls"] ?? null));
        yield ";
  var mailpoet_premium_version = ";
        // line 46
        yield json_encode($this->extensions['MailPoet\Twig\Functions']->getMailPoetPremiumVersion());
        yield ";
  var mailpoet_main_page_slug =   ";
        // line 47
        yield json_encode(($context["main_page"] ?? null));
        yield ";
  var mailpoet_3rd_party_libs_enabled = ";
        // line 48
        yield $this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape(json_encode($this->extensions['MailPoet\Twig\Functions']->libs3rdPartyEnabled()), "html", null, true);
        yield ";
  var mailpoet_analytics_enabled = ";
        // line 49
        yield $this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape(json_encode($this->extensions['MailPoet\Twig\Analytics']->isEnabled()), "html", null, true);
        yield ";
  var mailpoet_analytics_public_id = ";
        // line 50
        yield json_encode($this->extensions['MailPoet\Twig\Analytics']->getPublicId());
        yield ";
  var mailpoet_analytics_new_public_id = ";
        // line 51
        yield $this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape(json_encode($this->extensions['MailPoet\Twig\Analytics']->isPublicIdNew()), "html", null, true);
        yield ";
  var mailpoet_free_domains = ";
        // line 52
        yield json_encode($this->extensions['MailPoet\Twig\Functions']->getFreeDomains());
        yield ";
  var mailpoet_woocommerce_active = ";
        // line 53
        yield json_encode($this->extensions['MailPoet\Twig\Functions']->isWoocommerceActive());
        yield ";
  var mailpoet_woocommerce_email_improvements_enabled = ";
        // line 54
        yield json_encode($this->extensions['MailPoet\Twig\Functions']->isWoocommerceEmailImprovementsEnabled());
        yield ";
  var mailpoet_woocommerce_subscriptions_active = ";
        // line 55
        yield json_encode(($context["is_woocommerce_subscriptions_active"] ?? null));
        yield ";
  var mailpoet_woocommerce_store_config = ";
        // line 56
        yield json_encode(($context["woocommerce_store_config"] ?? null));
        yield ";
  // RFC 5322 standard; http://emailregex.com/ combined with https://google.github.io/closure-library/api/goog.format.EmailAddress.html#isValid
  var mailpoet_email_regex = /(?=^[+a-zA-Z0-9_.!#\$%&'*\\/=?^`{|}~-]+@([a-zA-Z0-9-]+\\.)+[a-zA-Z0-9]{2,63}\$)(?=^(([^<>()\\[\\]\\\\.,;:\\s@\"]+(\\.[^<>()\\[\\]\\\\.,;:\\s@\"]+)*)|(\".+\"))@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}])|(([a-zA-Z\\-0-9]+\\.)+[a-zA-Z]{2,})))/;
  var mailpoet_feature_flags = ";
        // line 59
        yield json_encode(($context["feature_flags"] ?? null));
        yield ";
  var mailpoet_referral_id = ";
        // line 60
        yield json_encode(($context["referral_id"] ?? null));
        yield ";
  var mailpoet_wp_segment_state = ";
        // line 61
        yield json_encode(($context["wp_segment_state"] ?? null));
        yield ";
  var mailpoet_mta_method = '";
        // line 62
        yield $this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape(($context["mta_method"] ?? null), "html", null, true);
        yield "';
  var mailpoet_tracking_config = ";
        // line 63
        yield json_encode(($context["tracking_config"] ?? null));
        yield ";
  var mailpoet_is_new_user = ";
        // line 64
        yield json_encode((($context["is_new_user"] ?? null) == true));
        yield ";
  var mailpoet_installed_days_ago = ";
        // line 65
        yield json_encode(($context["installed_days_ago"] ?? null));
        yield ";
  var mailpoet_send_transactional_emails = ";
        // line 66
        yield json_encode(($context["send_transactional_emails"] ?? null));
        yield ";
  var mailpoet_transactional_emails_opt_in_notice_dismissed = ";
        // line 67
        yield json_encode(($context["transactional_emails_opt_in_notice_dismissed"] ?? null));
        yield ";
  var mailpoet_deactivate_subscriber_after_inactive_days = ";
        // line 68
        yield json_encode(($context["deactivate_subscriber_after_inactive_days"] ?? null));
        yield ";
  var mailpoet_woocommerce_version = ";
        // line 69
        yield json_encode($this->extensions['MailPoet\Twig\Functions']->getWooCommerceVersion());
        yield ";
  var mailpoet_track_wizard_loaded_via_woocommerce = ";
        // line 70
        yield json_encode(($context["track_wizard_loaded_via_woocommerce"] ?? null));
        yield ";
  var mailpoet_track_wizard_loaded_via_woocommerce_marketing_dashboard = ";
        // line 71
        yield json_encode(($context["track_wizard_loaded_via_woocommerce_marketing_dashboard"] ?? null));
        yield ";
  var mailpoet_mail_function_enabled = '";
        // line 72
        yield $this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape(($context["mail_function_enabled"] ?? null), "html", null, true);
        yield "';
  var mailpoet_admin_plugins_url = '";
        // line 73
        yield $this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape(($context["admin_plugins_url"] ?? null), "html", null, true);
        yield "';
  var mailpoet_is_dotcom = ";
        // line 74
        yield json_encode($this->extensions['MailPoet\Twig\Functions']->isDotcom());
        yield ";
  var mailpoet_cron_trigger_method = ";
        // line 75
        yield json_encode(($context["cron_trigger_method"] ?? null));
        yield ";

  var mailpoet_site_name = '";
        // line 77
        yield $this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape(($context["site_name"] ?? null), "html", null, true);
        yield "';
  var mailpoet_site_url = \"";
        // line 78
        yield $this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape(($context["site_url"] ?? null), "html", null, true);
        yield "\";
  var mailpoet_site_address = '";
        // line 79
        yield $this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape(($context["site_address"] ?? null), "html", null, true);
        yield "';

  // Premium status
  var mailpoet_current_wp_user_email = '";
        // line 82
        yield $this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape(($context["current_wp_user_email"] ?? null), "js"), "html", null, true);
        yield "';
  var mailpoet_premium_link = ";
        // line 83
        yield json_encode(($context["link_premium"] ?? null));
        yield ";
  var mailpoet_premium_plugin_installed = ";
        // line 84
        yield json_encode(($context["premium_plugin_installed"] ?? null));
        yield ";
  var mailpoet_premium_active = ";
        // line 85
        yield json_encode(($context["premium_plugin_active"] ?? null));
        yield ";
  var mailpoet_premium_plugin_download_url = ";
        // line 86
        yield json_encode(($context["premium_plugin_download_url"] ?? null));
        yield ";
  var mailpoet_premium_plugin_activation_url = ";
        // line 87
        yield json_encode(($context["premium_plugin_activation_url"] ?? null));
        yield ";
  var mailpoet_has_valid_api_key = ";
        // line 88
        yield json_encode(($context["has_valid_api_key"] ?? null));
        yield ";
  var mailpoet_has_valid_premium_key = ";
        // line 89
        yield json_encode(($context["has_valid_premium_key"] ?? null));
        yield ";
  var mailpoet_has_premium_support = ";
        // line 90
        yield json_encode(($context["has_premium_support"] ?? null));
        yield ";
  var has_mss_key_specified = ";
        // line 91
        yield json_encode(($context["has_mss_key_specified"] ?? null));
        yield ";
  var mailpoet_mss_key_invalid = ";
        // line 92
        yield json_encode(($context["mss_key_invalid"] ?? null));
        yield ";
  var mailpoet_mss_key_valid = ";
        // line 93
        yield json_encode(($context["mss_key_valid"] ?? null));
        yield ";
  var mailpoet_mss_key_pending_approval = '";
        // line 94
        yield $this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape(($context["mss_key_pending_approval"] ?? null), "html", null, true);
        yield "';
  var mailpoet_mss_active = ";
        // line 95
        yield json_encode(($context["mss_active"] ?? null));
        yield ";
  var mailpoet_plugin_partial_key = '";
        // line 96
        yield $this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape(($context["plugin_partial_key"] ?? null), "html", null, true);
        yield "';
  var mailpoet_subscribers_count = ";
        // line 97
        yield $this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape(($context["subscriber_count"] ?? null), "html", null, true);
        yield ";
  var mailpoet_subscribers_counts_cache_created_at = ";
        // line 98
        yield json_encode(($context["subscribers_counts_cache_created_at"] ?? null));
        yield ";
  var mailpoet_subscribers_limit = ";
        // line 99
        ((($context["subscribers_limit"] ?? null)) ? (yield $this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape(($context["subscribers_limit"] ?? null), "html", null, true)) : (yield "false"));
        yield ";
  var mailpoet_subscribers_limit_reached = ";
        // line 100
        yield json_encode(($context["subscribers_limit_reached"] ?? null));
        yield ";
  var mailpoet_email_volume_limit = ";
        // line 101
        yield json_encode(($context["email_volume_limit"] ?? null));
        yield ";
  var mailpoet_email_volume_limit_reached = ";
        // line 102
        yield json_encode(($context["email_volume_limit_reached"] ?? null));
        yield ";
  var mailpoet_capabilities = ";
        // line 103
        yield json_encode(($context["capabilities"] ?? null));
        yield ";
  var mailpoet_tier = ";
        // line 104
        yield json_encode(($context["tier"] ?? null));
        yield ";
  var mailpoet_cdn_url = ";
        // line 105
        yield json_encode($this->extensions['MailPoet\Twig\Assets']->generateCdnUrl(""));
        yield ";
  var mailpoet_tags = ";
        // line 106
        yield json_encode(($context["tags"] ?? null));
        yield ";

  ";
        // line 108
        if ( !($context["premium_plugin_active"] ?? null)) {
            // line 109
            yield "    var mailpoet_free_premium_subscribers_limit = ";
            yield $this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape(($context["free_premium_subscribers_limit"] ?? null), "html", null, true);
            yield ";
  ";
        }
        // line 111
        yield "</script>

";
        // line 113
        yield $this->extensions['MailPoet\Twig\I18n']->localize(["topBarLogoTitle" => $this->extensions['MailPoet\Twig\I18n']->translate("Back to section root"), "topBarUpdates" => $this->extensions['MailPoet\Twig\I18n']->translate("Updates"), "whatsNew" => $this->extensions['MailPoet\Twig\I18n']->translate("What’s new"), "updateMailPoetNotice" => $this->extensions['MailPoet\Twig\I18n']->translate("[link]Update MailPoet[/link] to see the latest changes"), "ajaxFailedErrorMessage" => $this->extensions['MailPoet\Twig\I18n']->translate("An error has happened while performing a request, the server has responded with response code %d"), "ajaxTimeoutErrorMessage" => $this->extensions['MailPoet\Twig\I18n']->translate("An error has happened while performing a request, the server request has timed out after %d seconds"), "dismissNotice" => $this->extensions['MailPoet\Twig\I18n']->translate("Dismiss this notice."), "confirmEdit" => $this->extensions['MailPoet\Twig\I18n']->translate("Sending is in progress. Do you want to pause sending and edit the newsletter?"), "confirmAutomaticNewsletterEdit" => $this->extensions['MailPoet\Twig\I18n']->translate("To edit this email, it needs to be deactivated. You can activate it again after you make the changes."), "subscribersLimitNoticeTitle" => $this->extensions['MailPoet\Twig\I18n']->translate("Action required: Upgrade your plan for more than [subscribersLimit] subscribers!"), "subscribersLimitNoticeTitleUnknownLimit" => $this->extensions['MailPoet\Twig\I18n']->translate("Action required: Upgrade your plan!"), "subscribersLimitReached" => $this->extensions['MailPoet\Twig\I18n']->translate("Congratulations on reaching over [subscribersLimit] subscribers!"), "subscribersLimitReachedUnknownLimit" => $this->extensions['MailPoet\Twig\I18n']->translate("Congratulations, you now have more subscribers than your plan’s limit!"), "freeVersionLimit" => $this->extensions['MailPoet\Twig\I18n']->translate("Our free version is limited to [subscribersLimit] subscribers."), "yourPlanLimit" => $this->extensions['MailPoet\Twig\I18n']->translate("Your plan is limited to [subscribersLimit] subscribers."), "youNeedToUpgrade" => $this->extensions['MailPoet\Twig\I18n']->translate("To continue using MailPoet without interruption, it’s time to upgrade your plan."), "actToSeamlessService" => $this->extensions['MailPoet\Twig\I18n']->translate("Act now to ensure seamless service to your growing audience."), "checkHowToManageSubscribers" => $this->extensions['MailPoet\Twig\I18n']->translate("Alternatively, [link]check how to manage your subscribers[/link] to keep your numbers below your plan’s limit."), "upgradeNow" => $this->extensions['MailPoet\Twig\I18n']->translate("Upgrade Now"), "refreshMySubscribers" => $this->extensions['MailPoet\Twig\I18n']->translate("Refresh subscriber limit"), "emailVolumeLimitNoticeTitle" => $this->extensions['MailPoet\Twig\I18n']->translate("Congratulations, you sent more than [emailVolumeLimit] emails this month!"), "emailVolumeLimitNoticeTitleUnknownLimit" => $this->extensions['MailPoet\Twig\I18n']->translate("Congratulations, you sent a lot of emails this month!"), "youReachedEmailVolumeLimit" => $this->extensions['MailPoet\Twig\I18n']->translate("You have sent more emails this month than your MailPoet plan includes ([emailVolumeLimit]), and sending has been temporarily paused."), "youReachedEmailVolumeLimitUnknownLimit" => $this->extensions['MailPoet\Twig\I18n']->translate("You have sent more emails this month than your MailPoet plan includes, and sending has been temporarily paused."), "toContinueUpgradeYourPlanOrWaitUntil" => $this->extensions['MailPoet\Twig\I18n']->translate("To continue sending with MailPoet Sending Service please [link]upgrade your plan[/link], or wait until sending is automatically resumed on <b>[date]</b>."), "refreshMyEmailVolumeLimit" => $this->extensions['MailPoet\Twig\I18n']->translate("Refresh monthly email limit"), "manageSenderDomainHeaderSubtitle" => $this->extensions['MailPoet\Twig\I18n']->translate("To help your audience and MailPoet authenticate you as the domain owner, please add the following DNS records to your domain’s DNS and click “Verify the DNS records”. Please note that it may take up to 24 hours for DNS changes to propagate after you make the change. [link]Read the guide[/link].", "mailpoet"), "sent" => $this->extensions['MailPoet\Twig\I18n']->translate("Sent"), "notSentYet" => $this->extensions['MailPoet\Twig\I18n']->translate("Not sent yet!"), "renderingProblem" => $this->extensions['MailPoet\Twig\I18n']->translate("There was a problem with rendering!", "mailpoet"), "allSendingPausedHeader" => $this->extensions['MailPoet\Twig\I18n']->translate("All sending is currently paused!"), "allSendingPausedBody" => $this->extensions['MailPoet\Twig\I18n']->translate("Your [link]API key[/link] to send with MailPoet is invalid."), "allSendingPausedPremiumValidBody" => $this->extensions['MailPoet\Twig\I18n']->translate("You are not allowed to use the MailPoet sending service with your current API key. Kindly upgrate to a [link]MailPoet sending plan[/link] or switch your [link]sending method[/link]."), "allSendingPausedLink" => $this->extensions['MailPoet\Twig\I18n']->translate("Purchase a key"), "allSendingPausedPremiumValidLink" => $this->extensions['MailPoet\Twig\I18n']->translate("Upgrade the plan"), "cronPingErrorHeader" => $this->extensions['MailPoet\Twig\I18n']->translate("There is an issue with the MailPoet task scheduler"), "systemStatusConnectionSuccessful" => $this->extensions['MailPoet\Twig\I18n']->translate("Connection successful."), "systemStatusConnectionUnsuccessful" => $this->extensions['MailPoet\Twig\I18n']->translate("Connection unsuccessful."), "systemStatusCronConnectionUnsuccessfulInfo" => $this->extensions['MailPoet\Twig\I18n']->translate("Please consult our [link]knowledge base article[/link] for troubleshooting tips."), "systemStatusIntroCron" => $this->extensions['MailPoet\Twig\I18n']->translate("For the plugin to work, it must be able to establish connection with the task scheduler."), "bridgePingErrorHeader" => $this->extensions['MailPoet\Twig\I18n']->translate("There is an issue with the connection to the MailPoet Sending Service"), "systemStatusMSSConnectionCanNotConnect" => $this->extensions['MailPoet\Twig\I18n']->translate("Currently, your installation can not reach the sending service. If you want to use our service please consult our [link]knowledge base article[/link] for troubleshooting tips."), "close" => $this->extensions['MailPoet\Twig\I18n']->translate("Close"), "today" => $this->extensions['MailPoet\Twig\I18n']->translate("Today")]);
        // line 165
        yield "

";
        // line 167
        yield from $this->unwrap()->yieldBlock('after_translations', $context, $blocks);
        // line 168
        yield "
";
        // line 169
        if ($this->extensions['MailPoet\Twig\Analytics']->isEnabled()) {
            // line 170
            yield "  ";
            yield from             $this->loadTemplate("analytics.html", "layout.html", 170)->unwrap()->yield($context);
        }
        // line 172
        yield "
";
        // line 173
        if ((($context["display_docsbot_widget"] ?? null) &&  !$this->extensions['MailPoet\Twig\Functions']->isDotcomEcommercePlan())) {
            // line 174
            yield "  ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["feature_flags"] ?? null), "odie_chatbot", [], "any", false, false, false, 174)) {
                // line 175
                yield "    <script type=\"text/javascript\" src=\"";
                yield $this->extensions['MailPoet\Twig\Assets']->getJavascriptScriptUrl("haw.js");
                yield "\"></script>
    <chat-widget
      id=\"chat\"
      bot=\"mailpoet-chat-support\"
      avatar=\"";
                // line 179
                yield $this->extensions['MailPoet\Twig\Assets']->generateCdnUrl("chat-avatar.png");
                yield "\"
      title=\"";
                // line 180
                yield $this->extensions['MailPoet\Twig\I18n']->translate("MailPoet support", "mailpoet");
                yield "\"
      subtitle=\"";
                // line 181
                yield $this->extensions['MailPoet\Twig\I18n']->translate("Chat with our AI assistant", "mailpoet");
                yield "\"
      first-message=\"";
                // line 182
                yield $this->extensions['MailPoet\Twig\I18n']->translate("How can I help you today?", "mailpoet");
                yield "\"
    >
      ";
                // line 184
                $context["support_form_url"] = ((($context["has_premium_support"] ?? null)) ? ("https://www.mailpoet.com/support/support-form/") : ("https://wordpress.org/support/plugin/mailpoet/"));
                // line 185
                yield "      <a slot=\"support-link\"
          href=\"";
                // line 186
                yield $this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape(($context["support_form_url"] ?? null), "html", null, true);
                yield "\"
          id=\"mailpoet-support-link\"
          style=\"display:none\"
          target=\"_blank\"
      >
        ";
                // line 191
                yield $this->extensions['MailPoet\Twig\I18n']->translate("Contact support", "mailpoet");
                yield "
      </a>
    </chat-widget>
    <script>
      const getChatId = () => localStorage.getItem('ai-widget-mailpoet-chat-support-chat-id');

      document.addEventListener('DOMContentLoaded', function() {
        const supportLink = document.getElementById('mailpoet-support-link');
        if (supportLink) {
          ";
                // line 200
                if (($context["has_premium_support"] ?? null)) {
                    // line 201
                    yield "            supportLink.addEventListener('click', function(e) {
              const chatId = getChatId();
              if (chatId) {
                e.preventDefault();
                window.open(`";
                    // line 205
                    yield $this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape(($context["support_form_url"] ?? null), "html", null, true);
                    yield "?chatId=\${chatId}`, '_blank');
              }
            });
          ";
                }
                // line 209
                yield "
          // Only show the support link once the chat has begun
          const checkChatId = setInterval(function() {
            const chatId = getChatId();
            if (chatId) {
              supportLink.style.display = 'block';
              clearInterval(checkChatId);
            }
          }, 2000);
        }
        // Prevent conflicts with other keydown events on Dotcom
        function writingFixer (e) {
            e.stopPropagation();
        }
        document.getElementById('chat').addEventListener('keydown', writingFixer);
      });
    </script>
  ";
            } else {
                // line 227
                yield "    <script type=\"text/javascript\">window.DocsBotAI=window.DocsBotAI||{},DocsBotAI.init=function(c){return new Promise(function(e,o){var t=document.createElement(\"script\");t.type=\"text/javascript\",t.async=!0,t.src=\"https://widget.docsbot.ai/chat.js\";var n=document.getElementsByTagName(\"script\")[0];n.parentNode.insertBefore(t,n),t.addEventListener(\"load\",function(){window.DocsBotAI.mount({id:c.id,supportCallback:c.supportCallback,identify:c.identify,options:c.options});var t;t=function(n){return new Promise(function(e){if(document.querySelector(n))return e(document.querySelector(n));var o=new MutationObserver(function(t){document.querySelector(n)&&(e(document.querySelector(n)),o.disconnect())});o.observe(document.body,{childList:!0,subtree:!0})})},t&&t(\"#docsbotai-root\").then(e).catch(o)}),t.addEventListener(\"error\",function(t){o(t.message)})})};</script>
    <script type=\"text/javascript\">
      DocsBotAI.init({
        id: \"TqTdebbGjJeUjrmBIFjh/kzFE5FBebBJiSJ2Tm0nR\",
        options: {
          ";
                // line 232
                if (($context["has_premium_support"] ?? null)) {
                    // line 233
                    yield "            supportLink: 'https://www.mailpoet.com/support/premium/',
          ";
                } else {
                    // line 235
                    yield "            supportLink: 'https://wordpress.org/support/plugin/mailpoet/',
            labels: {
              getSupport: \"";
                    // line 237
                    yield $this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape($this->extensions['MailPoet\Twig\I18n']->translate("Get help in the forum", "mailpoet"), "js"), "html", null, true);
                    yield "\"
            }
          ";
                }
                // line 240
                yield "        },
      }).then(() => {
        // Prevent conflicts with other keydown events on Dotcom
        function writingFixer (e) {
          e.stopPropagation();
        }
        document.getElementById('docsbotai-root').addEventListener(\"keydown\", writingFixer);
      })
    </script>
  ";
            }
        }
        // line 251
        yield "
<div id=\"mailpoet-modal\"></div>
";
        return; yield '';
    }

    // line 11
    public function block_templates($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 14
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        yield "<div class=\"wrap\">
  <div class=\"wp-header-end\"></div>
  <!-- notices -->
  <div id=\"mailpoet_notice_error\" class=\"mailpoet_notice\" style=\"display:none;\"></div>
  <div id=\"mailpoet_notice_success\" class=\"mailpoet_notice\" style=\"display:none;\"></div>
  <!-- React notices -->
  <div id=\"mailpoet_notices\"></div>

  <!-- Set FROM address modal React root -->
  <div id=\"mailpoet_set_from_address_modal\"></div>

  <!-- Set Authorize sender email React root -->
  <div id=\"mailpoet_authorize_sender_email_modal\"></div>

  <!-- title block -->
  ";
        // line 30
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 31
        yield "  <!-- content block -->
  ";
        // line 32
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 33
        yield "</div>
";
        return; yield '';
    }

    // line 30
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 32
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 167
    public function block_after_translations($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout.html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  553 => 167,  546 => 32,  539 => 30,  533 => 33,  531 => 32,  528 => 31,  526 => 30,  509 => 15,  505 => 14,  498 => 11,  491 => 251,  478 => 240,  472 => 237,  468 => 235,  464 => 233,  462 => 232,  455 => 227,  435 => 209,  428 => 205,  422 => 201,  420 => 200,  408 => 191,  400 => 186,  397 => 185,  395 => 184,  390 => 182,  386 => 181,  382 => 180,  378 => 179,  370 => 175,  367 => 174,  365 => 173,  362 => 172,  358 => 170,  356 => 169,  353 => 168,  351 => 167,  347 => 165,  345 => 113,  341 => 111,  335 => 109,  333 => 108,  328 => 106,  324 => 105,  320 => 104,  316 => 103,  312 => 102,  308 => 101,  304 => 100,  300 => 99,  296 => 98,  292 => 97,  288 => 96,  284 => 95,  280 => 94,  276 => 93,  272 => 92,  268 => 91,  264 => 90,  260 => 89,  256 => 88,  252 => 87,  248 => 86,  244 => 85,  240 => 84,  236 => 83,  232 => 82,  226 => 79,  222 => 78,  218 => 77,  213 => 75,  209 => 74,  205 => 73,  201 => 72,  197 => 71,  193 => 70,  189 => 69,  185 => 68,  181 => 67,  177 => 66,  173 => 65,  169 => 64,  165 => 63,  161 => 62,  157 => 61,  153 => 60,  149 => 59,  143 => 56,  139 => 55,  135 => 54,  131 => 53,  127 => 52,  123 => 51,  119 => 50,  115 => 49,  111 => 48,  107 => 47,  103 => 46,  99 => 45,  95 => 44,  91 => 43,  87 => 42,  83 => 41,  79 => 40,  75 => 39,  71 => 38,  67 => 37,  63 => 35,  61 => 14,  57 => 12,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout.html", "/home/circleci/mailpoet/mailpoet/views/layout.html");
    }
}
