<?php

/**
 * Użyta wersja PHP: 7.2.14
 * DOKUMENTACJA DISCORD WEBHOOK: https://discordapp.com/developers/docs/resources/webhook#execute-webhook
 */

require_once 'DiscordWebhook.php';

$url = "___TUTAJ_WKLEJ_LINK_DO_WEBHOOKA___";

$message 		= $_POST["content"];
$username 	= $_POST["username"] ?? "www.magictm.com";
$avatar_url = $_POST["avatar_url"] ?? NULL;
$tts 				= $_POST["tts"] ?? false;

$msg = new DiscordWebhook($message, $url, $username, $avatar_url);
$msg->send();

header("Location: .");