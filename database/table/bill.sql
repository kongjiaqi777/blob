#交易时间,交易类型,交易对方,商品,收/支,金额(元),支付方式,当前状态,交易单号,商户单号,备注
CREATE TABLE IF NOT EXISTS `wechat_bill` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '流失ID',
  `bill_type` varchar(256) COMMENT '交易类型',
  `trade_user` varchar(256) COMMENT '交易对方',
  `goods` varchar(256) COMMENT '商品',
  `trade_type` varchar(256) COMMENT '收/支',
  `amount` varchar(256) COMMENT '金额(元)',
  `operation_source` varchar(256) COMMENT '支付方式',
  `status` varchar(256) COMMENT '当前状态',
  `trade_code` varchar(256) COMMENT '交易单号',
  `order_code` varchar(256) COMMENT '商户单号',
  `comment` varchar(256) COMMENT '备注',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '交易时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='微信账单';
