<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/services/billing_setup_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V6\Services;

class BillingSetupService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0adc030a38676f6f676c652f6164732f676f6f676c656164732f76362f656e756d732f62696c6c696e675f73657475705f7374617475732e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76362e656e756d732289010a1642696c6c696e675365747570537461747573456e756d226f0a1242696c6c696e675365747570537461747573120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120b0a0750454e44494e47100212110a0d415050524f5645445f48454c441003120c0a08415050524f5645441004120d0a0943414e43454c4c4544100542ec010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76362e656e756d73421742696c6c696e67536574757053746174757350726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76362f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56362e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56365c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56363a3a456e756d73620670726f746f330a8b030a2d676f6f676c652f6164732f676f6f676c656164732f76362f656e756d732f74696d655f747970652e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76362e656e756d73224e0a0c54696d6554797065456e756d223e0a0854696d6554797065120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e100112070a034e4f571002120b0a07464f5245564552100342e2010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76362e656e756d73420d54696d655479706550726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76362f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56362e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56365c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56363a3a456e756d73620670726f746f330ae50c0a35676f6f676c652f6164732f676f6f676c656164732f76362f7265736f75726365732f62696c6c696e675f73657475702e70726f746f1221676f6f676c652e6164732e676f6f676c656164732e76362e7265736f75726365731a2d676f6f676c652f6164732f676f6f676c656164732f76362f656e756d732f74696d655f747970652e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f22f6080a0c42696c6c696e67536574757012440a0d7265736f757263655f6e616d65180120012809422de04105fa41270a25676f6f676c656164732e676f6f676c65617069732e636f6d2f42696c6c696e67536574757012140a026964180f200128034203e041034802880101125d0a0673746174757318032001280e32482e676f6f676c652e6164732e676f6f676c656164732e76362e656e756d732e42696c6c696e675365747570537461747573456e756d2e42696c6c696e6753657475705374617475734203e04103124f0a107061796d656e74735f6163636f756e741812200128094230e04105fa412a0a28676f6f676c656164732e676f6f676c65617069732e636f6d2f5061796d656e74734163636f756e74480388010112670a157061796d656e74735f6163636f756e745f696e666f180c2001280b32432e676f6f676c652e6164732e676f6f676c656164732e76362e7265736f75726365732e42696c6c696e6753657475702e5061796d656e74734163636f756e74496e666f4203e04105121e0a0f73746172745f646174655f74696d651810200128094203e04105480012540a0f73746172745f74696d655f74797065180a2001280e32342e676f6f676c652e6164732e676f6f676c656164732e76362e656e756d732e54696d6554797065456e756d2e54696d65547970654203e041054800121c0a0d656e645f646174655f74696d651811200128094203e04103480112520a0d656e645f74696d655f74797065180e2001280e32342e676f6f676c652e6164732e676f6f676c656164732e76362e656e756d732e54696d6554797065456e756d2e54696d65547970654203e0410348011aec020a135061796d656e74734163636f756e74496e666f12250a137061796d656e74735f6163636f756e745f69641806200128094203e04103480088010112270a157061796d656e74735f6163636f756e745f6e616d651807200128094203e04105480188010112250a137061796d656e74735f70726f66696c655f69641808200128094203e04105480288010112270a157061796d656e74735f70726f66696c655f6e616d651809200128094203e041034803880101122f0a1d7365636f6e646172795f7061796d656e74735f70726f66696c655f6964180a200128094203e04103480488010142160a145f7061796d656e74735f6163636f756e745f696442180a165f7061796d656e74735f6163636f756e745f6e616d6542160a145f7061796d656e74735f70726f66696c655f696442180a165f7061796d656e74735f70726f66696c655f6e616d6542200a1e5f7365636f6e646172795f7061796d656e74735f70726f66696c655f69643a64ea41610a25676f6f676c656164732e676f6f676c65617069732e636f6d2f42696c6c696e6753657475701238637573746f6d6572732f7b637573746f6d65725f69647d2f62696c6c696e675365747570732f7b62696c6c696e675f73657475705f69647d420c0a0a73746172745f74696d65420a0a08656e645f74696d6542050a035f696442130a115f7061796d656e74735f6163636f756e7442fe010a25636f6d2e676f6f676c652e6164732e676f6f676c656164732e76362e7265736f7572636573421142696c6c696e67536574757050726f746f50015a4a676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76362f7265736f75726365733b7265736f7572636573a20203474141aa0221476f6f676c652e4164732e476f6f676c654164732e56362e5265736f7572636573ca0221476f6f676c655c4164735c476f6f676c654164735c56365c5265736f7572636573ea0225476f6f676c653a3a4164733a3a476f6f676c654164733a3a56363a3a5265736f7572636573620670726f746f330ac40b0a3c676f6f676c652f6164732f676f6f676c656164732f76362f73657276696365732f62696c6c696e675f73657475705f736572766963652e70726f746f1220676f6f676c652e6164732e676f6f676c656164732e76362e73657276696365731a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f1a17676f6f676c652f6170692f636c69656e742e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f225e0a1647657442696c6c696e6753657475705265717565737412440a0d7265736f757263655f6e616d65180120012809422de04102fa41270a25676f6f676c656164732e676f6f676c65617069732e636f6d2f42696c6c696e6753657475702286010a194d757461746542696c6c696e6753657475705265717565737412180a0b637573746f6d65725f69641801200128094203e04102124f0a096f7065726174696f6e18022001280b32372e676f6f676c652e6164732e676f6f676c656164732e76362e73657276696365732e42696c6c696e6753657475704f7065726174696f6e4203e0410222790a1542696c6c696e6753657475704f7065726174696f6e12410a0663726561746518022001280b322f2e676f6f676c652e6164732e676f6f676c656164732e76362e7265736f75726365732e42696c6c696e675365747570480012100a0672656d6f76651801200128094800420b0a096f7065726174696f6e22680a1a4d757461746542696c6c696e675365747570526573706f6e7365124a0a06726573756c7418012001280b323a2e676f6f676c652e6164732e676f6f676c656164732e76362e73657276696365732e4d757461746542696c6c696e675365747570526573756c7422310a184d757461746542696c6c696e675365747570526573756c7412150a0d7265736f757263655f6e616d6518012001280932e3030a1342696c6c696e6753657475705365727669636512c5010a0f47657442696c6c696e67536574757012382e676f6f676c652e6164732e676f6f676c656164732e76362e73657276696365732e47657442696c6c696e675365747570526571756573741a2f2e676f6f676c652e6164732e676f6f676c656164732e76362e7265736f75726365732e42696c6c696e675365747570224782d3e4930231122f2f76362f7b7265736f757263655f6e616d653d637573746f6d6572732f2a2f62696c6c696e675365747570732f2a7dda410d7265736f757263655f6e616d6512e6010a124d757461746542696c6c696e675365747570123b2e676f6f676c652e6164732e676f6f676c656164732e76362e73657276696365732e4d757461746542696c6c696e675365747570526571756573741a3c2e676f6f676c652e6164732e676f6f676c656164732e76362e73657276696365732e4d757461746542696c6c696e675365747570526573706f6e7365225582d3e493023722322f76362f637573746f6d6572732f7b637573746f6d65725f69643d2a7d2f62696c6c696e675365747570733a6d75746174653a012ada4115637573746f6d65725f69642c6f7065726174696f6e1a1bca4118676f6f676c656164732e676f6f676c65617069732e636f6d42ff010a24636f6d2e676f6f676c652e6164732e676f6f676c656164732e76362e7365727669636573421842696c6c696e6753657475705365727669636550726f746f50015a48676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76362f73657276696365733b7365727669636573a20203474141aa0220476f6f676c652e4164732e476f6f676c654164732e56362e5365727669636573ca0220476f6f676c655c4164735c476f6f676c654164735c56365c5365727669636573ea0224476f6f676c653a3a4164733a3a476f6f676c654164733a3a56363a3a5365727669636573620670726f746f33"
        ), true);
        static::$is_initialized = true;
    }
}

