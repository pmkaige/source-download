-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-06-15 02:07:37
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ed2k`
--

-- --------------------------------------------------------

--
-- 表的结构 `ed_admin`
--

CREATE TABLE IF NOT EXISTS `ed_admin` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT '管理员id',
  `username` varchar(30) NOT NULL COMMENT '用户名',
  `password` char(32) NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `ed_admin`
--

INSERT INTO `ed_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '96e79218965eb72c92a549dd5a330112'),
(2, 'tongpan', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- 表的结构 `ed_article`
--

CREATE TABLE IF NOT EXISTS `ed_article` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT '文章id',
  `title` varchar(150) NOT NULL COMMENT '标题',
  `keywords` varchar(255) NOT NULL COMMENT '关键词',
  `desc` varchar(255) NOT NULL COMMENT '描述',
  `content` longtext NOT NULL COMMENT '内容',
  `dowurl` longtext NOT NULL COMMENT '下载地址',
  `tags` varchar(150) NOT NULL COMMENT '标签',
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '资源类型  1:ed2k  2:磁力资源  3：网盘 4:迅雷地址',
  `addtime` int(10) NOT NULL COMMENT '添加时间',
  `updatetime` int(10) NOT NULL COMMENT '修改时间',
  `cate_id` mediumint(9) NOT NULL COMMENT '所属栏目',
  `uid` mediumint(9) NOT NULL DEFAULT '1' COMMENT '发布用户',
  `status` tinyint(1) NOT NULL DEFAULT '2' COMMENT '审核状态 1：通过  2：待审 3：不通过',
  `click` mediumint(9) NOT NULL DEFAULT '0' COMMENT '点击量',
  `size` varchar(20) NOT NULL COMMENT '资源大小 -1：磁力资源 -2：网盘资源',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- 转存表中的数据 `ed_article`
--

INSERT INTO `ed_article` (`id`, `title`, `keywords`, `desc`, `content`, `dowurl`, `tags`, `type`, `addtime`, `updatetime`, `cate_id`, `uid`, `status`, `click`, `size`) VALUES
(8, '西游记', '', '西游记', '<p>西游记西游记西游记</p>', 'ed2k://|file|[西游记E01.1986.DVDRip.x264.AC3-CMCT.mkv|734230649|8f9515dbc82a9b607eb158714887777f|h=s3qz24pyec5z4lcaghqqm76uuunrmted|/\r\ned2k://|file|[西游记E02.1986.DVDRip.x264.AC3-CMCT.mkv|734855631|f6ecbaf6ed394558176fd879a26fefce|h=dunmuos4cfec3t2fnwfshjt2mloewcvt|/\r\ned2k://|file|[西游记E03.1986.DVDRip.x264.AC3-CMCT.mkv|737306296|d6e7b4f030237d0dae868d38b7e1fb3f|h=cxjskdmk6j4yt4cnlxzvslgxacp5bhax|/\r\ned2k://|file|[西游记E04.1986.DVDRip.x264.AC3-CMCT.mkv|735110397|95541b5f3cab061799843859925d3be4|h=uumolr6slfckncmzbzxopbksvbupz7je|/\r\ned2k://|file|[西游记E05.1986.DVDRip.x264.AC3-CMCT.mkv|743262554|ba441ca28a7545befacb58925ba39c8e|h=l7nnfg4x4avl2zchmqnwutjn2ppxt2a5|/\r\ned2k://|file|[西游记E06.1986.DVDRip.x264.AC3-CMCT.mkv|737866843|4668c1054a80d2dcd11fd35100dc8bcd|h=jafjfqbxlpcjwkzpqjwsa35pfilqshto|/\r\ned2k://|file|[西游记E07.1986.DVDRip.x264.AC3-CMCT.mkv|732279024|f7b698e2fd4591fbee86e22f735aa26f|h=cbojgmmoowj7lwol4jpul6u2mu5tlgqb|/\r\ned2k://|file|[西游记E08.1986.DVDRip.x264.AC3-CMCT.mkv|729284061|9f1bce3b8bb7d762a91de7bf4867955f|h=lfse2yte73i5mauo6ul23wfz272jmmqm|/\r\ned2k://|file|[西游记E09.1986.DVDRip.x264.AC3-CMCT.mkv|739287127|144ee75e0dbfd9106b28d72e49e33946|h=5n4jvrmm4erhycxmgomiacuzlkgcnofv|/\r\ned2k://|file|[西游记E10.1986.DVDRip.x264.AC3-CMCT.mkv|734457158|06dcc88df4d7a623e824b7a2ddf497ce|h=hjg3ew6omo2mhklkhpcpsf25o25pssad|/\r\ned2k://|file|[西游记E11.1986.DVDRip.x264.AC3-CMCT.mkv|734585617|6676938dcf87c56e075c033b7d652485|h=6aqwaa5m6iqg5kdwi5su2yhr56y5imil|/\r\ned2k://|file|[西游记E12.1986.DVDRip.x264.AC3-CMCT.mkv|728934163|c5251dcad2cd22c26e0590c17a211b6f|h=prkxg7tbq4zywfrgaf2rjhftbbewc4ko|/\r\ned2k://|file|[西游记E13.1986.DVDRip.x264.AC3-CMCT.mkv|734500505|84beb7f3caa66c52352e3215f2c25b1d|h=nemx65gf7foz3csldz2pvtk37cio6tll|/\r\ned2k://|file|[西游记E14.1986.DVDRip.x264.AC3-CMCT.mkv|737895646|cc31211d72b99d003c6a0ae2d2bb733b|h=zkpsbpzpduzyftna7w7ujn3q3sh3qcph|/\r\ned2k://|file|[西游记E15.1986.DVDRip.x264.AC3-CMCT.mkv|737275938|68be8e7fa13c84ef84881e6299642e10|h=4yfnv7y7sqw3fy6atlxbx5lx3bvyhdjc|/\r\ned2k://|file|[西游记E16.1986.DVDRip.x264.AC3-CMCT.mkv|733003464|2fb7d6fe2af5fdcaef241b42f7b5c4dc|h=yjqrcgjrnsceqts5rmn3eaaaqwyozcjn|/\r\ned2k://|file|[西游记E17.1986.DVDRip.x264.AC3-CMCT.mkv|732897839|2f8486fbd747fde0dab61aabf9a2c87d|h=p4kdnxbycgsp5rxgquf5egcm26ynznlf|/\r\ned2k://|file|[西游记E18.1986.DVDRip.x264.AC3-CMCT.mkv|735861459|75989be466f5465302c9ec74f7b5db89|h=tqugn2vfmnkdomop4nzscsz7ash3bsyq|/\r\ned2k://|file|[西游记E19.1986.DVDRip.x264.AC3-CMCT.mkv|733769009|db195a3a8ad06acbf0d512d142a5dfe5|h=duacdkskz5hbghszrkkd5ssfg37rs3q5|/\r\ned2k://|file|[西游记E20.1986.DVDRip.x264.AC3-CMCT.mkv|734171614|661c18a9cbfffed3fc6c8051d39e02a3|h=ky5sla475yf24gdo6gef5iin6rvupzs2|/\r\ned2k://|file|[西游记E21.1986.DVDRip.x264.AC3-CMCT.mkv|734970811|2ed87d12fdd59980fa787135379e4123|h=a7tkmp3je7ntsypv6zvq254ibqk27ldm|/\r\ned2k://|file|[西游记E23.1986.DVDRip.x264.AC3-CMCT.mkv|733587552|1c7d71260c858f65fa4ddeb3ad422fc4|h=75w5ab7wgq6f3ca5265pb4tpcr6ytnpj|/\r\ned2k://|file|[西游记E22.1986.DVDRip.x264.AC3-CMCT.mkv|734804470|7446b83700618a07384dbc796f7ed8c0|h=prmc3yhgcqmg53ygcbulbxu42l6ug6gb|/\r\ned2k://|file|[西游记E24-E25.1986.DVDRip.x264.AC3-CMCT.mkv|1577296041|fec3a9c08eca59d61ee2054262945e23|h=3c3ehm3mn7wpr64aq7vq4brv5i7f64lu|/', '西游记,孙悟空,沙僧,猪八戒', 1, 1493957175, 1494126025, 11, 1, 1, 1, '17.21Gb'),
(9, '红楼梦', '红楼梦', '红楼梦', '<p>红楼梦红楼梦红楼梦红楼梦红楼梦红楼梦</p>', 'ed2k://|file|%E7%BA%A2%E6%A5%BC%E6%A2%A601-%E6%9E%97%E9%BB%9B%E7%8E%89%E5%88%AB%E7%88%B6%E8%BF%9B%E4%BA%AC%E9%83%BD(ED2000.COM).mkv|156090505|20D525BED1F618B42FD086386FABFEED|h=NKDVUY32Q6CJEM5ICUYWBU6N2QH7TSBA|/@@\r\ned2k://|file|%E7%BA%A2%E6%A5%BC%E6%A2%A602-%E5%AE%9D%E9%BB%9B%E9%92%97%E5%88%9D%E4%BC%9A%E8%8D%A3%E5%BA%86%E5%A0%82(ED2000.COM).mkv|157672601|F0545A61223A80653FF8FED029318CC1|h=BTJNOGEU6PPUB4CY3LURNAULE7JIAAP7|/@@\r\ned2k://|file|%E7%BA%A2%E6%A5%BC%E6%A2%A603-%E5%88%98%E5%A7%A5%E5%A7%A5%E4%B8%80%E8%BF%9B%E8%8D%A3%E5%9B%BD%E5%BA%9C(ED2000.COM).mkv|157566360|6E3ADED87106DC47A03E8B9378623B64|h=7ZRT2ZTK2POD35CLJLBT4YBQXDHI3E6E|/@@\r\ned2k://|file|%E7%BA%A2%E6%A5%BC%E6%A2%A604-%E6%8E%A2%E5%AE%9D%E9%92%97%E9%BB%9B%E7%8E%89%E5%8D%8A%E5%90%AB%E9%85%B8(ED2000.COM).mkv|156873761|4C3F856BC8FF0D5E1D2DAD1F5E13C612|h=ITT2OKAJQ6FA4VFHSZZDKMZAMOGKI3PJ|/', '红楼梦', 1, 1493957415, 1496741176, 26, 1, 1, 2000, '628203227'),
(11, '水浒传', '水浒传', '水浒传', '<p>水浒传水浒传水浒传</p>', 'magnet:?xt=urn:btih:87D1D0BAD104B38C9F58AF6DF2FD9337D49A3CEE&dn=%e6%b0%b4%e6%b5%92%e4%bc%a0%ef%bc%881998%ef%bc%89', '', 2, 1493957556, 1496741102, 8, 1, 1, 0, 'cl'),
(12, '测试', '', '', '', '', '', 1, 1493960506, 1493960506, 16, 1, 1, 0, '0'),
(16, '测试网盘', '', '', '<p>测试网盘测试网盘测试网盘测试网盘测试网盘测试网盘测试网盘测试网盘测试网盘测试网盘测试网盘测试网盘测试网盘测试网盘测试网盘测试网盘测试网盘测试网盘测试网盘测试网盘测试网盘测试网盘测试网盘测试网盘测试网盘测试网盘<br/></p>', 'http://pan.baidu.com/s/1qYoETnm|en3d@@http://pan.baidu.com/s/1boC5Kvl|m3u5@@http://pan.baidu.com/s/1boC5Kvl|', '', 3, 1494122434, 1496655605, 8, 1, 1, 0, 'wp'),
(18, '美国鼠谭2', '美国,鼠谭', '美国鼠谭2', '<p>美国鼠谭2美国鼠谭2美国鼠谭2美国鼠谭2</p>', 'magnet:?xt=urn:btih:B9224BE2CCBE4BE2C8022512E91C19EFAD0FEF04&dn=美国鼠谭2 An.American.Tail.2.1991.720p.BluRay.x264-USURY 2.19GBxl=1003707076@@magnet:?xt=urn:btih:DDC48446E7889C3B2768768D91BB4071B5E2BB76&dn=美国鼠谭2 An.American.Tail.2.1991.1080p.BluRay.x264-USURY 4.38GB', '美国,鼠谭', 2, 1494770027, 1494773727, 8, 1, 1, 0, 'cl'),
(19, '三国演义', '三国,曹操', '', '<p>三国演义三国演义三国演义三国演义</p>', 'ed2k://|file|52wy.480p.三国演义.dvdrip.ep01.桃园三结义.mkv|238514548|08D537D53CCE2DD1A5E9E38A91317ED3|h=LQVRVVHTDBHJUDFFGC54B4ZWINSSTTV3|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep02.十常侍乱政.mkv|263671260|C81D424C5456FC80914439040B2B4345|h=43VEOQOZ6ADWQTIQYVRTGB6HRWJMI5AP|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep03.董卓霸京师.mkv|259073495|89056E959D73D1F7C4D46664745EFC8C|h=4OHGJVT4RJBXZOCB7KG4AX5EHZIV6UEM|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep04.孟德献刀.mkv|258776289|3E0C8D7C45CFED1D107AA3598F22A0EA|h=3776DX22LIVUKUNU7EQLZQUZY4FHPPAK|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep05.三英战吕布.mkv|257682098|15831D41EE46D77C66536547CA142500|h=YH5KFV4T2BAOJEKD5E3OQY6K3KPTTYVV|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep06.连环计.mkv|259063858|585A06AA90E719111EC98D892353BC3A|h=UKHBXJP7AWVAPH5SEU7U4YLOMW3EA7VG|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep07.凤仪亭.mkv|261743944|D9EC4227F1D9AAA55C714C03A0A297E6|h=7363TPFPFZJUQ5BXAIEZNVTEDIL5JPS2|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep08.三让徐州.mkv|258126597|8AA79B70BB9043097BF8708F3B5D040B|h=OASXKNPU427UR7K7PJJLMHMPJPWKDLGP|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep09.孙策立业.mkv|257434867|E2F839AEF7BD83CDA75CC5A66E893288|h=SRM4FOYHA4ACFQIYI6MBNKKKSOHH2YHQ|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep10.辕门射戟.mkv|258631294|582C47F48D217C8B468CDF62C0BA19FC|h=JGQZZFXC36WVSD6LZ5QMWWGUP6KROB2E|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep11.宛城之战.mkv|259523471|9BC86F6A8F1CBEF4E052D9E57F25E637|h=6UGKYQZFLFMJRTIZWVRF3IQ36NAWSILQ|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep12.白门楼(上).mkv|248948950|71F09851EB2FD6235A762C8D2BD4D879|h=IWN4N2VY6N2ZHMLQTUXINY42XTTR4Q5I|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep13.白门楼(下).mkv|250167142|EC73F9D36C72DDBF92D28DC4AFA9E5E4|h=K7CHG7BJJKAJVHIG7T2IZB62KHSLE5JL|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep14.煮酒论英雄.mkv|258322685|42D0328F9C3B13885460E6695BEF25CB|h=MJ5NKAJLCKL7BR4NZO3CI7WL4B45UW56|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep15.袁曹起兵.mkv|253963291|DABB8FD2AA0517FBF2CD40D56344682F|h=W566SK6F5DGRITYGDXS55M76ERAD4AID|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep16.关羽约三事.mkv|259633716|C27596D8F90500CB4D242E5D2B42FD82|h=BUEDM2AVUIBOY2FOE6GHUEONC4ZAWB75|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep17.挂印封金.mkv|257783553|13EFF6C5894A51AF8ACDAB6CF0E45DD3|h=PYW5RAIYB6RHQKI32ERE4PIU7ZVKIJL3|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep18.千里走单骑.mkv|257425116|86CEA6DDA1467B1CCAE130B5D4E35F21|h=PPTGJDZC6ELUB5PY7KGWMINFLRHGZEOO|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep19.古城相会.mkv|256598241|96CF879353B712DA6C43722D47CE3953|h=7PHKRAUQBP5NE6T2OJSM43UTZE5ZUTYP|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep20.孙策之死.mkv|258099935|F6F50C07415D58F0B3EDB62CD2E06BF6|h=26KYR6UEGEF3O3X2Y5ZMNLJEDZUN74H3|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep21.官渡之战(上).mkv|252982921|B27CCE3B7DC01921D84212EAEFF07C09|h=5LSLX4N3HY7IHWG3HVXOUDGYQ372PKYM|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep22.官渡之战(下).mkv|258136914|41B572983456D6B5EE71FD828922F320|h=IL4X35QBGDTUF7WAYXT5CVAWN2Z5YZ53|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep23.大破袁绍.mkv|257102879|9BA020E86F559131C29FA94DFE088832|h=JRJR2NKKFXPLM6T3OIDZIPWUAI2NZUHU|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep24.跃马檀溪.mkv|249238681|96E51EE739E55414D1E54B6DD02DC659|h=EYPIWF4WNA5HR7EBWW2BQ32LOUBARFGT|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep25.刘备求贤.mkv|257151343|60022805487B3B81C527CB131958BA40|h=GKALT45T64KNIPC6TWAY5WH4Y37ZTRZ5|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep26.回马荐诸葛.mkv|247952989|11ECCAE2C5F99A52DDEFE4B25E15DF2E|h=6VSQ6QMEUXM3WHFNSIZT6GJZ642MBM6V|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep27.三顾茅庐.mkv|247489203|60CF84350FCA94605A5C81BD517DEF49|h=J3UWTUP62OHQMR7IW6AZLVGSMJDQD5DQ|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep28.火烧博望坡.mkv|257976065|A400DD6675BB107E8053B1345B141644|h=ZEOPJNBBIOURCUANR5E4DZTXKOLP4XEO|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep29.携民渡江.mkv|254642726|F75AF3D488F4A3D8B10C16D360D0AEA6|h=QBXHLIDTBOLI2MPYVZXQQR3RZFAUOM57|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep30.舌战群儒.mkv|248514245|141A258F1F9F2A58CF03764041174A25|h=NH7TFRW4GGAO3OA6BXMKDOQE6YOTYDE2|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep31.智激周瑜.mkv|258256248|42BF3CD187CC980C6210BD4695B4E2FF|h=NUBM3J6G3WQTB4AIC65S6XOGM52N6VMT|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep32.周瑜空设计.mkv|257218359|F70C081BDB5A49D57A6994232C21DD63|h=STIHM4R322YY3OPH5DUXQCDGM3GUZKGT|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep33.群英会.mkv|253806460|B011506C379E9F7F6C0EA87F19084FCD|h=LYL3JJJXA53CI3MM2TXKQ5LYKJ7DHMMN|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep34.草船借箭.mkv|256725323|B00B637EDDC5401DF5E5B7E1387B3681|h=OXPFXA6ACLM64HN66G6E3PH27HCRFHPG|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep35.苦肉计.mkv|256451031|30E1693502BB9FBE55DD4767C218A61C|h=MJBDRQHSGFPV2N5DWPZEMIKCAZGGQY47|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep36.庞统献连环.mkv|255197950|CA68D22901B27EF87E7D03A910B7A1CF|h=T55S3WSS2456HTZN36TS5H3TQMNOJ6OS|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep37.横槊赋诗.mkv|249177880|DDA5B789D7A9461AD39EA821D6E7DD3E|h=4G763WWVWN57BVOZWMCFFXJCEVH34ZO2|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep38.诸葛祭风.mkv|253725715|CF6D729C9566B02F27F40C48D608821A|h=CGSFA3YYYPJ272VLTRJMTIOFINPJPI4G|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep39.火烧赤壁.mkv|252328074|262C8C2926802E983DFC3862EA4B30D6|h=DB333SMLT7GNYZUWWOCIHI62FMBJ4ELN|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep40.智取南郡.mkv|258265957|9BEB7BB44240E40E9DDC90C28B95EF0C|h=Q7S4LKMNK2MS657W2IATODJQBYZ6AWOO|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep41.力夺四郡.mkv|246950000|6E87FC281F595A9197E9525ADA2FBA27|h=GHNZQ5CQ2COCJWOBCWQBVJZPXA6DSTSA|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep42.美人计.mkv|254993941|507B9DF00A866AE7DD4E5C7B7E65C295|h=J3ZSR2XN7I3FI633PNQPU4OSKN4AG27F|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep43.甘露寺.mkv|245177886|EFC000D8C16319F3981049E37F2126AF|h=6RY2VGCY5DU6XKFXW4ZXUJDPGKD3Y6WT|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep44.回荆州.mkv|254562034|507E4AD679A638BD22EB3FDAA67B4D38|h=HMYKNIBZT6QNICWQTQPY3Y2JRNYEJNPY|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep45.三气周瑜.mkv|250682056|1B0B16EFAA121ACB89D6566A3935F0F1|h=H5V2SAEX4PBG37EIGB2ZXV5YJ4UYUQBW|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep46.卧龙吊孝.mkv|257150605|704D44CC33EF214DC45DB33ED2E19F9C|h=O766ODGOWNA2RHADQ53S3JXT5CGWZRRX|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep47.割须弃袍.mkv|254601334|1E679C6B399C6CE3E774B3436D6DFE2E|h=HBDERBE3I6CJEUHJYHKONVL5Y2KTQPTR|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep48.张松献图.mkv|258640948|8A824FD0E404FDA23718B5A58F2F724C|h=AIVBCYRCY3E4C3DQHIWAZG2NICNIHIFH|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep49.刘备入川.mkv|242564833|F1C9CFD8A74BB888FE9BF405FEE80B21|h=NANNSQT6NG7G62D6HUPSOG6FPG5M7G7I|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep50.凤雏落坡.mkv|252463166|8F9552FF101B7A3796391596C337C9C1|h=ZOAA6ZAKGET36VW7Y4SU2CW4CVXZ54IV|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep51.义释严颜.mkv|258153659|8D3DD08F89A53A28F492983266DE8AB0|h=YZB5KILVJTJRBMYH44H3V4LNL4NGUE3F|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep52.夺占西川.mkv|236280126|163679A5645074719DCCCB155FB8FF65|h=VCTXJ6VKQMSFH5OMO3YQK6OGZMFPSSCC|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep53.单刀赴会.mkv|247050491|0C414258234C8E5F21AC2F3F476C05D5|h=FAZIFJTTUPKTG4BB5NHBZGS2AZYNW55Y|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep54.合肥会战.mkv|253947047|CCC88EEB6E3C21383D2BA550EAAAA7F3|h=7CUOFDMR4AQZ54UID6HGXXG3DKIFIA6A|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep55.立嗣之争.mkv|259959567|FE7B266D8689405FA03A69E126D985B9|h=GRMSXZMK5BKTQUHORUAMU73LY2NPZOMM|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep56.定军山.mkv|251078272|7E7535C2EB2E67EFBAB0FFE2B4B1C732|h=4DOPGGTXSIEGQELGEWGGA473K6FQLF73|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep57.巧取汉中.mkv|243583860|034FC45680C10ABFC3488D3A68378989|h=LMUF56V2GXQ72QPLMJF6RUWBPXHBVEXE|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep58.水淹七军.mkv|258315362|4DBC217BF92B61A0F4A44E9642123986|h=BOSCA7CTFCAGDXWT26DCHEUVATT5LY2W|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep59.走麦城.mkv|256563671|388BF1B740A5410D470C0C16287DDBE7|h=4YNFIJHRVYGWBI4JO5SVP5K2OT6NPJUN|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep60.曹操之死.mkv|256371957|FA525686EE379D32B163CD01D59DACBF|h=3K7MPQKOIJ3655UBO7SAEWZXSHWMQSBX|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep61.曹丕篡汉.mkv|258318992|A43F8D232E0BB1A122A5226541AB474D|h=CXBCFNXCIWQ4CIKXKKW33P4W4Y3U5TMS|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep62.兴兵伐吴.mkv|251681909|F9A13B8E8FDF3D42B204C9ABBE0F5141|h=6WDGCLCXD4L4NYG5DEHLXVJRZRJFMZAE|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep63.火烧连营.mkv|251259556|DDCD37786D4D7BBB4F5958E5CA693420|h=PMT36BPPSGP6UG5E4SWVRXP6BZASTENP|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep64.安居平五路.mkv|256819172|53DDDC4B0F40860596B5D27EFCE8B764|h=T5XZJH3R44VWIE3NNQHNARAYC47JIRJK|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep65.兵渡泸水.mkv|257436521|D461B67DF6135F587E5C9C8DDCCB40F6|h=7NR2ZTOTLWQFESRNLM7OKN6TBKSQIQVY|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep66.绝路问津.mkv|255235607|215ED898732976B8C62A007E00AEEFD5|h=TNGCMPW3M7EYXEC4P6JSHOOHHOZ5KEJI|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep67.七擒孟获.mkv|255210971|AD2B8636C5E36401EB160771F7B6B45A|h=UD4U6PN7BWMBNIPXMQ3UPDOSWWUWBOW4|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep68.出师北伐.mkv|255515654|BD222A8678F45E20FFB034218189E4C0|h=DTBCI4DLTN5HI7ZEIPXGAVKYYZMX3RLO|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep69.收姜维.mkv|256574323|A70386902FD9A8FD209DDB52F0BED8A7|h=A2PEZYCLHEVN7C36JMO4V7JOODPRHH5E|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep70.司马复出.mkv|257713447|F2D3CA4D710BA620BA58CF90F6A92C89|h=ECA6QCF3B37REDRH5MDHCUDZMA76PATZ|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep71.空城退敌.mkv|253900733|56BFA8D3DA5CAF4E25D240E9E60A339A|h=3FHYE3PTSJGA7TF7EUIXAAKHNPR5YQ6T|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep72.司马取印.mkv|255539983|130437B722731C9E3B8E5B2F360DE9F4|h=KNWJQTDN24RFXAVINPLEEOTS4YXS57P3|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep73.祁山斗智.mkv|256072076|D880E1303B2597A801C992A6E91BD85E|h=N7ULTOWQLVB44CRV2UK7L4Q4XDDUPKYQ|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep74.诸葛妆神.mkv|258522091|BFA3F02C87FC893A0D543EE695D22763|h=KJHZ256JVF3XHMGKUNUBF5F4PLTOFDGR|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep75.六出祁山.mkv|257354478|089A478C7582A279BB497E191414C5F6|h=ZK2AJ6GVHXCMKCTZ43I2CTIN3GSFTM3A|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep76.火熄上方谷.mkv|257066449|D23C35D7E8CFC5C308450EC3B4A7501C|h=HC6QQVJ2YQCFI6RQMUBCWKYDLWG4PHX5|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep77.秋风五丈原.mkv|256442299|214156D38E320B70FB7B690B7451C354|h=4KA4PNEHJW37IE5OIML374KR3SYI2IAN|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep78.诈病赚曹爽.mkv|254180791|023A28E046C308F1F510EAB6546D6456|h=7ZNOAG22YUTKYMO3KWWLG4Q6DIXC5VTU|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep79.吴宫干戈.mkv|248961832|6665C628BAE2B69E61AB10790C6F357A|h=VWFXYRNE53J2GQ2TQGMPZOWSEZC4NMIB|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep80.兵困铁笼山.mkv|254980377|FDEE89057E75DDB6C0801B9EA1687809|h=VKYR6ICYIYUZTGBOWARQ3AOA6TLHML6T|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep81.司马昭弑君.mkv|256195900|11BB2D5814F8EF7194687075C810C707|h=3TF25OMEVG3HFWAXET6C4SYV4DBZ2KZ4|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep82.九伐中原.mkv|238510783|8F0ECB92106CBB10AC3CEE229FBE58AC|h=4LEKR7L2QTXAQOL2I6N33OOQDRFOQSKH|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep83.偷渡阴平.mkv|250789112|16A1F32ADC9EEAF6597F9DA109CFC6B8|h=2EUPPIUOK3MR2YZUYOXU7EBJM56WVC54|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.ep84.三分归晋.mkv|240917109|880BCF2A98A7EC7604CDCE5BB4214995|h=ABFTBCGRU5UEP64KINQHIUMZNSYLCWI4|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.片头曲.mkv|58447712|3D5C6409757444E7CF2728B98864F529|h=KI72HVAITNLQSDKXLIGPTLX2YMH7BULA|/@@\r\ned2k://|file|52wy.480p.三国演义.dvdrip.片尾曲.mkv|51770193|5FF7E24D0E3EA133A85D28FFADC33615|h=TH6V7M6GXPF5Y6BR3WPDKD5WSIV7JQAZ|/', '三国,曹操', 1, 1496727889, 1496727889, 8, 1, 1, 0, '21460034198'),
(20, '电影下载', '电影下载', '电影下载电影下载', '<p>电影下载电影下载电影下载电影下载</p>', 'thunder://QUFodHRwOi8vd3d3Lnh1bmxlaXRpYW50YW5nLmNvbS9kL2ZpbGUvbW92aWUvMjAxNy0wNS0xOS9hMzQ5ODdjYTdhMmQ5ODc3NmE3MTJjNWNkZDJlYTI5OC50b3JyZW50Wlo=|测试迅雷1@@thunder://QUFmdHA6Ly9oOmhAcGlhb2h1YTY2OC5jb206MTUxMzIv9czIrbXAQkTW0NOiy6vX1lvGrruod3d3LnBpYW9odWEuY29tXS5ybXZiWlo=|测试迅雷2@@thunder://QUFlZDJrOi8vfGZpbGV8JWUzJTgwJTkwbG9sJWU3JTk0JWI1JWU1JWJkJWIxJWU1JWE0JWE5JWU1JWEwJTgyd3d3LmxvbGR5dHQuY29tJWUzJTgwJTkxJUU2JTkxJTk0JUU4JUI3JUE0JUU1JTkwJUE3LiVFNyU4OCVCOCVFNyU4OCVCOC43MjBQLkhEJUU0JUI4JUFEJUU1JUFEJTk3d3d3LmxvbGR5dHQuY29tLm1wNHwyODMwMjY0MjY5fDA1MDkwNDY0NUZCNTEyMTU2RUZFODg5MjVEMjg1OUE1fGg9QlA2UFBJTVU0VDRLVERJNEFCNE9ITUpNWk9KRUtTVE58L1pa|测试迅雷3【500MB】', '电影,下载', 4, 1496740736, 1496740932, 8, 1, 1, 0, 'xl'),
(21, '新三国', '新三国', '新三国', '<p>新三国新三国新三国</p>', '', '新三国', 1, 1496887782, 1496887782, 8, 1, 1, 5, '0'),
(22, '大话三国', '大话三国', '大话三国', '<p>大话三国大话三国</p>', '', '大话三国', 1, 1496887806, 1496887806, 8, 1, 1, 0, '0'),
(23, '啊的发生的', '', '', '阿萨德发撒旦法', '阿萨德发撒旦法', '阿士大夫,f,f,是,的', 1, 1497193267, 1497193267, 8, 1, 2, 0, ''),
(25, '《爱的艺术》【PDF】', '', '', '<p>[size=16px]内容介绍：\r\n这本书要说服读者：如果不努力发展自己的全部人格并以此达到一种创造倾向性，那么每种爱的试图都会失败；如果没有爱他人的能力，如果不能真正谦恭地、勇敢地、真诚地和有纪律地爱他人，那么人们在自己的爱情生活中也永远得不到满足。每个人都可以问问自己，你确实见过多少真正有能力爱的人呢？ 达到这目标尽管困难，但这不足以成为理由，从而不去寻找造成这一困难的原因和了解克服困难的条件。为了使这一问题不再复杂化，我努力在这本书里避免使用专业词汇，同时也尽量不援引别的资料。 但是在另一个问题上，我却没有找到圆满的解决办法。\r\n\r\n[/size]</p>', 'ed2k://|file|爱的艺术.pdf|29925211|3E697F7168DF1527CC298A398FCB2F0E|h=2RIV3LDIBNMHH6FOGW3AY5QAH4IBLVDR|/', '爱,艺术,人格,真诚,能力', 1, 1497230995, 1497231073, 21, 3, 2, 0, '29925211'),
(26, '四大职场商战小说', '', '', '<p>四大职场商战小说四大职场商战小说四大职场商战小说</p>', 'ed2k://|file|%E5%9B%9B%E5%A4%A7%E8%81%8C%E5%9C%BA%E5%95%86%E6%88%98%E5%B0%8F%E8%AF%B4(ED2000.COM).zip|1448691|C5A79F5CD9C3610E558B9A9DE6DD1471|h=YGRZWTPU7JYEHKUC7RIG3TM5MZH2CQQ5|/', '商战,小说,职场,,', 1, 1497231188, 1497270863, 21, 3, 1, 1, '1448691'),
(27, '《做自己的职场专家》111', '', '', '<p>11111\r\n[b]\r\n内容简介[/b]\r\n\r\n《做自己的职场专家》主要讲述了为什么有人能拥有好工作，有人却连工作都找不到？为什么你即使有能力却始终不会被老板升职加薪？为什么你人品很好却老是和同事搞不好关系？为什么你需要了解一些“职场厚黑学”？为什么天资和家世不如人也可以是你的竞争优势？为什么聪明的老板对自己看重的人先要“大材小用”？你知道对公司而言员工的结果比过程更重要吗？你知道“杜拉拉”成功靠的是什么吗？你知道办公室里有哪些“潜规则”吗？你知道在职场也需要“变色龙”的本领吗？你知道怎样与上司、老板正确相处吗？你知道怎样维护自己的合法劳动权益吗？你知道怎样跳槽才能跳得高、跳得好吗？……\r\n我们可以憎恨职场，恐惧职场，却无法离开职场。看清表象下的真实，听出谎言后的真相，悟透谬误里的真理，这就是没人会轻易告诉你的、最给力的职场生存术！</p>', 'ed2k://|file|《做自己的职场专家》扫描版[PDF]|31040478|221DD6EBEAC83493449D697F7EADD8C1|h=WYEN25Q75EE75KU35EMESIA75SHFKC2F|/@@ed2k://|file|《做自己的职场专家》扫描版[PDF]|31040478|221DD6EBEAC83493449D697F7EADD8C1|h=WYEN25Q75EE75KU35EMESIA75SHFKC2F|/', '职场3,专家2,工作1,,', 1, 1497231278, 1497239063, 21, 3, 1, 0, '62080956'),
(30, '测试音乐', '', '', '', '', '', 1, 1497451385, 1497451385, 31, 1, 1, 0, '0'),
(31, '测试欧美音乐', '', '', '', '', '', 1, 1497451517, 1497451549, 32, 1, 1, 4, '0'),
(28, '《运动健康一点通》(董宇国)扫描版[PDF]', '', '', '<p>由于人们对缺乏体育运动的危害性认识不足，加之饮食不当，以至于肥胖症、糖尿病、心脑血管疾病患者越来越多。有的人因此生命质量严重下降，甚至付出生命代价。《运动健康一点通》一书是由众多医学专家、学者编写而成，内容通俗易懂。本书主要从医学角度阐述了锻炼身体防病治病，如何进行科学的体育运动，不同年龄人群应该怎么锻炼等老百姓关心的问题。我们希望本书的出版，能成为广大读者运动健康的良师益友。\r\n\r\n[b]内容截图：[/b]\r\n\r\n[url=http://image-7.verycd.com/5b516d690a1b0305dbc534652da554ea103516/QQ%E6%88%AA%E5%9B%BE%E6%9C%AA%E5%91%BD%E5%90%8D2.jpg][img=IPB Image]http://image-7.verycd.com/5b516d690a1b0305dbc534652da554ea103516%28600x%29/thumb.jpg[/img][/url]</p>', 'ed2k://|file|《运动健康一点通》(董宇国)扫描版[PDF].zip|4030878|1F5BAE3DA63A9F32B56A2818C45C115A|h=L423NGLXD5IIZR6LCNYLFGIRRLUZ4NKW|s=http://d.68bt.cc/%E4%B8%B4%E6%97%B6%E5%A4%96%E9%93%BE/%E6%96%87%E6%A1%A3/[%E8%BF%90%E5%8A%A8%E5%81%A5%E5%BA%B7%E4%B8%80%E7%82%B9%E9%80%9A].%E8%91%A3%E5%AE%87%E5%9B%BD.%E6%89%AB%E6%8F%8F%E7%89%88.zip|s=http://disc.52sk2.com/document/[%E8%BF%90%E5%8A%A8%E5%81%A5%E5%BA%B7%E4%B8%80%E7%82%B9%E9%80%9A].%E8%91%A3%E5%AE%87%E5%9B%BD.%E6%89%AB%E6%8F%8F%E7%89%88.zip|s=http://disc2.52sk2.com/%E4%B9%A6%E6%9F%9C/%E4%B9%A6%E7%B1%8D/[%E8%BF%90%E5%8A%A8%E5%81%A5%E5%BA%B7%E4%B8%80%E7%82%B9%E9%80%9A].%E8%91%A3%E5%AE%87%E5%9B%BD.%E6%89%AB%E6%8F%8F%E7%89%88.zip|s=http://www.5kwz.cc/BOOK/[%E8%BF%90%E5%8A%A8%E5%81%A5%E5%BA%B7%E4%B8%80%E7%82%B9%E9%80%9A].%E8%91%A3%E5%AE%87%E5%9B%BD.%E6%89%AB%E6%8F%8F%E7%89%88.zip|/', '运动,健康,pdf,,', 1, 1497231798, 1497232493, 21, 3, 1, 1, '4030878'),
(29, '2017年一级建造师最新版教材（全科）', '', '', '<p>2017年一级建造师最新版教材（全科）2017年一级建造师最新版教材（全科）2017年一级建造师最新版教材（全科）2017年一级建造师最新版教材（全科）2017年一级建造师最新版教材（全科）2017年一级建造师最新版教材（全科）2017年一级建造师最新版教材（全科）2017年一级建造师最新版教材（全科）</p>', 'magnet:?xt=urn:btih:2B2O6AJD5SSBFRNKDPIXBKZ7CZRQLWC3&dn=2017年一级建造师最新版教材@@magnet:?xt=urn:btih:2B2O6AJD5SSBFRNKDPIXBKZ7CZRQLWC3&dn=2017年一级建造师最新版教材', '2017,一级建造师,最新资料,,', 2, 1497231949, 1497232358, 21, 3, 1, 0, 'cl');

-- --------------------------------------------------------

--
-- 表的结构 `ed_cate`
--

CREATE TABLE IF NOT EXISTS `ed_cate` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT '栏目id',
  `cate_name` varchar(60) NOT NULL COMMENT '栏目名称',
  `pid` mediumint(9) NOT NULL COMMENT '上级栏目id',
  `title` varchar(100) NOT NULL COMMENT '标题',
  `keywords` varchar(255) NOT NULL COMMENT '关键词',
  `desc` varchar(255) NOT NULL COMMENT '描述',
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '类型 1：列表栏目 2：单页栏目',
  `content` longtext NOT NULL COMMENT '内容',
  `pos` tinyint(1) NOT NULL DEFAULT '1' COMMENT '栏目位置 1：头部 2：底部',
  `sort` smallint(6) NOT NULL DEFAULT '50' COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- 转存表中的数据 `ed_cate`
--

INSERT INTO `ed_cate` (`id`, `cate_name`, `pid`, `title`, `keywords`, `desc`, `type`, `content`, `pos`, `sort`) VALUES
(26, '爱情', 8, '', '', '', 1, '', 1, 50),
(11, '动作', 8, '', '', '', 1, '', 1, 50),
(10, '喜剧', 8, '', '', '', 1, '', 1, 50),
(8, '电影', 0, '', '', '', 1, '', 1, 11),
(27, '恐怖', 8, '', '', '', 1, '', 1, 50),
(16, '游戏', 0, '电影1', '电影1', '电影1', 1, '<p>栏目内容1<br/></p>', 1, 10),
(20, '动漫', 0, '', '', '', 1, '', 1, 9),
(21, '图书', 0, '', '', '', 1, '', 1, 8),
(22, '综艺', 0, '', '', '', 1, '', 1, 7),
(23, '软件', 0, '', '', '', 1, '', 1, 6),
(24, '资料', 0, '', '', '', 1, '', 1, 5),
(25, '教育', 0, '', '', '', 1, '', 1, 4),
(28, '关于我们', 0, '关于我们', '关于我们', '关于我们', 2, '<p>关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们</p>', 2, 3),
(29, '版权声明', 0, '版权声明', '版权声明', '版权声明版权声明', 2, '<p>版权声明版权声明版权声明版权声明版权声明版权声明版权声明版权声明版权声明版权声明版权声明版权声明版权声明版权声明版权声明版权声明版权声明版权声明版权声明</p>', 2, 2),
(30, '帮助中心', 0, '帮助中心', '帮助中心', '帮助中心', 2, '<p>帮助中心帮助中心帮助中心帮助中心帮助中心帮助中心帮助中心</p>', 2, 1),
(31, '音乐', 0, '', '', '', 1, '', 1, 50),
(32, '欧美音乐', 31, '', '', '', 1, '', 1, 50);

-- --------------------------------------------------------

--
-- 表的结构 `ed_config`
--

CREATE TABLE IF NOT EXISTS `ed_config` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT '配置id',
  `ename` varchar(60) NOT NULL COMMENT '英文名称',
  `cname` varchar(100) NOT NULL COMMENT '中文名称',
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '配置类型 1：单行文本 2：文本域 3：单选按钮 4：文件类型',
  `value` varchar(100) NOT NULL COMMENT '默认值',
  `values` varchar(100) NOT NULL COMMENT '可选值',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `ed_config`
--

INSERT INTO `ed_config` (`id`, `ename`, `cname`, `type`, `value`, `values`) VALUES
(1, 'webname', '网站名称', 1, 'ed2000', ''),
(2, 'desc', '站点描述', 2, 'ed2000最好的资源下载网站！', ''),
(3, 'site_status', '站点状态', 3, '开启', '开启,关闭'),
(4, 'logo', '网站logo', 4, '20170502\\7b89e9584c61d98cbd6002edaf41a53a.png', ''),
(6, 'mreg', '会员注册', 3, '开启', '开启,关闭'),
(7, 'erweima', '二维码', 4, '20170502\\c627495d75f470c06474fa562ead6adc.gif', ''),
(8, 'hotclick', '热门点击数', 1, '0', ''),
(9, 'newtime', '最新资源', 1, '', '');

-- --------------------------------------------------------

--
-- 表的结构 `ed_point`
--

CREATE TABLE IF NOT EXISTS `ed_point` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `uid` mediumint(9) NOT NULL COMMENT '点赞用户',
  `article_id` mediumint(9) NOT NULL COMMENT '点赞文章',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=59 ;

--
-- 转存表中的数据 `ed_point`
--

INSERT INTO `ed_point` (`id`, `uid`, `article_id`) VALUES
(31, 3, 8),
(32, 4, 8);

-- --------------------------------------------------------

--
-- 表的结构 `ed_user`
--

CREATE TABLE IF NOT EXISTS `ed_user` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `email` varchar(60) NOT NULL COMMENT '邮件地址/用户名',
  `password` char(32) NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `ed_user`
--

INSERT INTO `ed_user` (`id`, `email`, `password`) VALUES
(1, 'tongpan0@163.com', '96e79218965eb72c92a549dd5a330112'),
(2, 'tongnian@163.com', '96e79218965eb72c92a549dd5a330112'),
(3, 'tongtong@163.com', '96e79218965eb72c92a549dd5a330112');

-- --------------------------------------------------------

--
-- 表的结构 `ed_userinfo`
--

CREATE TABLE IF NOT EXISTS `ed_userinfo` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT '用户信息id',
  `uname` varchar(60) NOT NULL COMMENT '昵称',
  `sex` tinyint(4) NOT NULL DEFAULT '0' COMMENT '性别：0:保密 1:男 2：女',
  `power_status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '权限状态 1：正常 2：禁止',
  `source_num` mediumint(9) NOT NULL DEFAULT '0' COMMENT '资源数',
  `live_day` mediumint(9) NOT NULL DEFAULT '0' COMMENT '活跃天数',
  `qq` char(11) NOT NULL COMMENT 'qq',
  `birthday` char(10) NOT NULL COMMENT '生日',
  `sign` varchar(255) NOT NULL COMMENT '用户签名',
  `regtime` int(10) NOT NULL COMMENT '注册时间',
  `lasttime` int(10) NOT NULL COMMENT '最后登录时间',
  `ip` char(15) NOT NULL COMMENT '注册id',
  `adress` varchar(150) NOT NULL COMMENT '地址',
  `uid` mediumint(9) NOT NULL COMMENT '对应用户id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `ed_userinfo`
--

INSERT INTO `ed_userinfo` (`id`, `uname`, `sex`, `power_status`, `source_num`, `live_day`, `qq`, `birthday`, `sign`, `regtime`, `lasttime`, `ip`, `adress`, `uid`) VALUES
(1, 'tongnian123', 1, 1, 0, 4, '123123123', '2016-02-06', '大家好我是童攀123', 1497103142, 1497445826, '127.0.0.1', '', 1),
(2, '童攀11', 0, 1, 0, 0, '34534534511', '2017-06-15', '阿萨德发撒旦法撒的发11', 1497156601, 1497156601, '127.0.0.1', '', 2),
(3, '童童', 1, 1, 0, 0, '543566778', '', '', 1497230837, 1497244191, '127.0.0.1', '', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
