<?php

namespace krqkenez\SoulsBurn\events;

class VkEvents
{

	public const EVENTS = [
		"message_new" => MessageNewEvent::class,
		"message_reply" => MessageReplyEvent::class,
		"message_edit" => MessageEditEvent::class,
		"message_allow" => MessageAllowEvent::class,
		"message_deny" => MessageDenyEvent::class,
		"message_typing_state" => MessageTypingStateEvent::class,
		"message_event" => MessageActionEvent::class,
		"photo_new" => PhotoNewEvent::class,
		"photo_comment_new" => PhotoCommentNewEvent::class,
		"photo_comment_edit" => PhotoCommentEditEvent::class,
		"photo_comment_restore" => PhotoCommentRestoreEvent::class,
		"photo_comment_delete" => PhotoCommentDeleteEvent::class,
		"audio_new" => AudioNewEvent::class,
		"video_new" => VideoNewEvent::class,
		"video_comment_new" => VideoCommentNewEvent::class,
		"video_comment_edit" => VideoCommentEditEvent::class,
		"video_comment_restore" => VideoCommentRestoreEvent::class,
		"video_comment_delete" => VideoCommentDeleteEvent::class,
		"wall_post_new" => WallPostNewEvent::class,
		"wall_repost" => WallRepostEvent::class,
		"wall_reply_new" => WallReplyNewEvent::class,
		"wall_reply_edit" => WallReplyEditEvent::class,
		"wall_reply_restore" => WallReplyRestoreEvent::class,
		"wall_reply_delete" => WallReplyDeleteEvent::class,
		"like_add" => LikeAddEvent::class,
		"like_remove" => LikeRemoveEvent::class,
		"board_post_new" => BoardPostNewEvent::class,
		"board_post_edit" => BoardPostEditEvent::class,
		"board_post_restore" => BoardPostRestoreEvent::class,
		"board_post_delete" => BoardPostDeleteEvent::class,
		"market_comment_new" => MarketCommentNewEvent::class,
		"market_comment_edit" => MarketCommentEditEvent::class,
		"market_comment_restore" => MarketCommentRestoreEvent::class,
		"market_comment_delete" => MarketCommentDeleteEvent::class,
		"market_order_new" => MarketOrderNewEvent::class,
		"market_order_edit" => MarketOrderEditEvent::class,
		"group_leave" => GroupLeaveEvent::class,
		"group_join" => GroupJoinEvent::class,
		"user_block" => UserBlockEvent::class,
		"user_unblock" => UserUnblockEvent::class,
		"poll_vote_new" => PollVoteNewEvent::class,
		"group_officers_edit" => GroupOfficersEditEvent::class,
		"group_change_settings" => GroupChangeSettingsEvent::class,
		"group_change_photo" => GroupChangePhotoEvent::class,
		"vkpay_transaction" => VkpayTransactionEvent::class,
		"app_payload" => AppPayloadEvent::class,
		"donut_subscription_create" => DonutSubscriptionCreateEvent::class,
		"donut_subscription_prolonged" => DonutSubscriptionProlongedEvent::class,
		"donut_subscription_expired" => DonutSubscriptionExpiredEvent::class,
		"donut_subscription_cancelled" => DonutSubscriptionCancelledEvent::class,
		"donut_subscription_price_changed" => DonutSubscriptionPriceChangedEvent::class,
		"donut_money_withdraw" => DonutMoneyWithdrawEvent::class,
		"donut_money_withdraw_error" => DonutMoneyWithdrawErrorEvent::class
	];

	public static function getInitedEvent(array $data): mixed
	{
		$class = self::EVENTS[$data["type"]];
		return new $class($data["object"]);
	}

}
