<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/services/google_ads_field_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V3\Services;

class GoogleAdsFieldService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ae6030a3d676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f676f6f676c655f6164735f6669656c645f63617465676f72792e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76332e656e756d73228a010a1a476f6f676c654164734669656c6443617465676f7279456e756d226c0a16476f6f676c654164734669656c6443617465676f7279120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120c0a085245534f555243451002120d0a094154545249425554451003120b0a075345474d454e541005120a0a064d4554524943100642f0010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d73421b476f6f676c654164734669656c6443617465676f727950726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56332e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56335c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a456e756d73620670726f746f330ab8040a3e676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f676f6f676c655f6164735f6669656c645f646174615f747970652e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76332e656e756d7322db010a1a476f6f676c654164734669656c644461746154797065456e756d22bc010a16476f6f676c654164734669656c644461746154797065120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120b0a07424f4f4c45414e100212080a04444154451003120a0a06444f55424c45100412080a04454e554d100512090a05464c4f4154100612090a05494e543332100712090a05494e5436341008120b0a074d455353414745100912110a0d5245534f555243455f4e414d45100a120a0a06535452494e47100b120a0a0655494e543634100c42f0010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d73421b476f6f676c654164734669656c64446174615479706550726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56332e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56335c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a456e756d73620670726f746f330ae50a0a38676f6f676c652f6164732f676f6f676c656164732f76332f7265736f75726365732f676f6f676c655f6164735f6669656c642e70726f746f1221676f6f676c652e6164732e676f6f676c656164732e76332e7265736f75726365731a3e676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f676f6f676c655f6164735f6669656c645f646174615f747970652e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f1a1e676f6f676c652f70726f746f6275662f77726170706572732e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f22e1060a0e476f6f676c654164734669656c6412150a0d7265736f757263655f6e616d65180120012809122a0a046e616d6518022001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512620a0863617465676f727918032001280e32502e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732e476f6f676c654164734669656c6443617465676f7279456e756d2e476f6f676c654164734669656c6443617465676f7279122e0a0a73656c65637461626c6518042001280b321a2e676f6f676c652e70726f746f6275662e426f6f6c56616c7565122e0a0a66696c74657261626c6518052001280b321a2e676f6f676c652e70726f746f6275662e426f6f6c56616c7565122c0a08736f727461626c6518062001280b321a2e676f6f676c652e70726f746f6275662e426f6f6c56616c756512350a0f73656c65637461626c655f7769746818072003280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512390a136174747269627574655f7265736f757263657318082003280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565122d0a076d65747269637318092003280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565122e0a087365676d656e7473180a2003280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512310a0b656e756d5f76616c756573180b2003280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512630a09646174615f74797065180c2001280e32502e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732e476f6f676c654164734669656c644461746154797065456e756d2e476f6f676c654164734669656c644461746154797065122e0a08747970655f75726c180d2001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565122f0a0b69735f7265706561746564180e2001280b321a2e676f6f676c652e70726f746f6275662e426f6f6c56616c75653a50ea414d0a27676f6f676c656164732e676f6f676c65617069732e636f6d2f476f6f676c654164734669656c641222676f6f676c654164734669656c64732f7b676f6f676c655f6164735f6669656c647d4280020a25636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e7265736f75726365734213476f6f676c654164734669656c6450726f746f50015a4a676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f7265736f75726365733b7265736f7572636573a20203474141aa0221476f6f676c652e4164732e476f6f676c654164732e56332e5265736f7572636573ca0221476f6f676c655c4164735c476f6f676c654164735c56335c5265736f7572636573ea0225476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a5265736f7572636573620670726f746f330abb090a3f676f6f676c652f6164732f676f6f676c656164732f76332f73657276696365732f676f6f676c655f6164735f6669656c645f736572766963652e70726f746f1220676f6f676c652e6164732e676f6f676c656164732e76332e73657276696365731a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f1a17676f6f676c652f6170692f636c69656e742e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f22360a18476574476f6f676c654164734669656c6452657175657374121a0a0d7265736f757263655f6e616d651801200128094203e0410222590a1c536561726368476f6f676c654164734669656c64735265717565737412120a0571756572791801200128094203e0410212120a0a706167655f746f6b656e18022001280912110a09706167655f73697a651803200128052299010a1d536561726368476f6f676c654164734669656c6473526573706f6e736512420a07726573756c747318012003280b32312e676f6f676c652e6164732e676f6f676c656164732e76332e7265736f75726365732e476f6f676c654164734669656c6412170a0f6e6578745f706167655f746f6b656e180220012809121b0a13746f74616c5f726573756c74735f636f756e7418032001280332c2030a15476f6f676c654164734669656c645365727669636512c1010a11476574476f6f676c654164734669656c64123a2e676f6f676c652e6164732e676f6f676c656164732e76332e73657276696365732e476574476f6f676c654164734669656c64526571756573741a312e676f6f676c652e6164732e676f6f676c656164732e76332e7265736f75726365732e476f6f676c654164734669656c64223d82d3e493022712252f76332f7b7265736f757263655f6e616d653d676f6f676c654164734669656c64732f2a7dda410d7265736f757263655f6e616d6512c7010a15536561726368476f6f676c654164734669656c6473123e2e676f6f676c652e6164732e676f6f676c656164732e76332e73657276696365732e536561726368476f6f676c654164734669656c6473526571756573741a3f2e676f6f676c652e6164732e676f6f676c656164732e76332e73657276696365732e536561726368476f6f676c654164734669656c6473526573706f6e7365222d82d3e493021f221a2f76332f676f6f676c654164734669656c64733a7365617263683a012ada410571756572791a1bca4118676f6f676c656164732e676f6f676c65617069732e636f6d4281020a24636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e7365727669636573421a476f6f676c654164734669656c645365727669636550726f746f50015a48676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f73657276696365733b7365727669636573a20203474141aa0220476f6f676c652e4164732e476f6f676c654164732e56332e5365727669636573ca0220476f6f676c655c4164735c476f6f676c654164735c56335c5365727669636573ea0224476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a5365727669636573620670726f746f33"
        ), true);
        static::$is_initialized = true;
    }
}
