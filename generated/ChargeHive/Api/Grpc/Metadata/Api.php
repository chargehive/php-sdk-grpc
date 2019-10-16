<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace ChargeHive\Api\Grpc\Metadata;

class Api
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\GithubCom\GrpcEcosystem\GrpcGateway\ProtocGenSwagger\Options\Annotations::initOnce();
        \GPBMetadata\GithubCom\GrpcEcosystem\GrpcGateway\ThirdParty\Googleapis\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \ChargeHive\Chtype\Metadata\Generic::initOnce();
        \ChargeHive\Chtype\Metadata\Fraud::initOnce();
        \ChargeHive\Chtype\Metadata\PaymentMethod::initOnce();
        \ChargeHive\Chtype\Metadata\PaymentMethodSchema::initOnce();
        \ChargeHive\Chtype\Metadata\Enum::initOnce();
        \ChargeHive\Chtype\Metadata\Charge::initOnce();
        \ChargeHive\Chtype\Metadata\Transaction::initOnce();
        \ChargeHive\Chtype\Metadata\ResponseCodes::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a8d290a096170692e70726f746f120a636861726765686976651a5a6769" .
            "746875622e636f6d2f677270632d65636f73797374656d2f677270632d67" .
            "6174657761792f74686972645f70617274792f676f6f676c65617069732f" .
            "676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f1a1f" .
            "676f6f676c652f70726f746f6275662f74696d657374616d702e70726f74" .
            "6f1a1f636861726765686976652f6368747970652f67656e657269632e70" .
            "726f746f1a1d636861726765686976652f6368747970652f66726175642e" .
            "70726f746f1a26636861726765686976652f6368747970652f7061796d65" .
            "6e745f6d6574686f642e70726f746f1a2d636861726765686976652f6368" .
            "747970652f7061796d656e745f6d6574686f645f736368656d612e70726f" .
            "746f1a1c636861726765686976652f6368747970652f656e756d2e70726f" .
            "746f1a1e636861726765686976652f6368747970652f6368617267652e70" .
            "726f746f1a23636861726765686976652f6368747970652f7472616e7361" .
            "6374696f6e2e70726f746f1a26636861726765686976652f636874797065" .
            "2f726573706f6e73655f636f6465732e70726f746f220e0a0c456d707479" .
            "5265717565737422200a0f537472696e675472616e73706f7274120d0a05" .
            "76616c7565180120012809222b0a16436861726765417574686f72697a65" .
            "5265717565737412110a096368617267655f6964180120012809224e0a17" .
            "436861726765417574686f72697a65526573706f6e736512330a0b747261" .
            "6e73616374696f6e18012001280b321e2e636861726765686976652e6368" .
            "747970652e5472616e73616374696f6e22540a1443686172676543617074" .
            "7572655265717565737412110a096368617267655f696418012001280912" .
            "290a06616d6f756e7418022001280b32192e636861726765686976652e63" .
            "68747970652e416d6f756e7422410a154368617267654361707475726552" .
            "6573706f6e736512140a0c61636b6e6f776c656467656418012001280812" .
            "120a0a70726f636573735f6964180220012809227f0a1743686172676552" .
            "6566756e645472616e73616374696f6e121b0a13536f757263655472616e" .
            "73616374696f6e496418012001280912290a06616d6f756e741802200128" .
            "0b32192e636861726765686976652e6368747970652e416d6f756e74121c" .
            "0a147061796d656e745f6d6574686f645f746f6b656e18032001280922b9" .
            "010a13436861726765526566756e645265717565737412110a0963686172" .
            "67655f696418012001280912290a06616d6f756e7418022001280b32192e" .
            "636861726765686976652e6368747970652e416d6f756e7412290a067265" .
            "61736f6e18032001280b32192e636861726765686976652e636874797065" .
            "2e526561736f6e12390a0c7472616e73616374696f6e7318042003280b32" .
            "232e636861726765686976652e436861726765526566756e645472616e73" .
            "616374696f6e22400a14436861726765526566756e64526573706f6e7365" .
            "12140a0c61636b6e6f776c656467656418012001280812120a0a70726f63" .
            "6573735f696418022001280922530a1343686172676543616e63656c5265" .
            "717565737412110a096368617267655f696418012001280912290a067265" .
            "61736f6e18022001280b32192e636861726765686976652e636874797065" .
            "2e526561736f6e22450a1443686172676543616e63656c526573706f6e73" .
            "6512160a0e63616e63656c5f7375636365737318012001280812150a0d63" .
            "616e63656c5f726573756c7418022001280922b3010a1643686172676546" .
            "726175645363616e5265717565737412110a096368617267655f69641801" .
            "20012809124f0a0f6164646974696f6e616c5f6461746118022003280b32" .
            "362e636861726765686976652e43686172676546726175645363616e5265" .
            "71756573742e4164646974696f6e616c44617461456e7472791a350a1341" .
            "64646974696f6e616c44617461456e747279120b0a036b65791801200128" .
            "09120d0a0576616c75651802200128093a023801224a0a17436861726765" .
            "46726175645363616e526573706f6e7365122f0a07726573756c74731801" .
            "2003280b321e2e636861726765686976652e6368747970652e4672617564" .
            "526573756c7422ce020a1343686172676543726561746552657175657374" .
            "121a0a126d65726368616e745f7265666572656e63651801200128091229" .
            "0a06616d6f756e7418022001280b32192e636861726765686976652e6368" .
            "747970652e416d6f756e7412180a105061796d656e744d6574686f644964" .
            "73180320032809122f0a0b6578706972795f74696d6518042001280b321a" .
            "2e676f6f676c652e70726f746f6275662e54696d657374616d7012360a0d" .
            "636f6e74726163745f7479706518052001280e321f2e6368617267656869" .
            "76652e6368747970652e436f6e74726163745479706512390a0b656e7669" .
            "726f6e6d656e7418062001280e32242e636861726765686976652e636874" .
            "7970652e436861726765456e7669726f6e6d656e7412320a0b6368617267" .
            "655f6d65746118072001280b321d2e636861726765686976652e63687479" .
            "70652e4368617267654d65746122290a1443686172676543726561746552" .
            "6573706f6e736512110a096368617267655f6964180120012809228f020a" .
            "134368617267654d6f646966795265717565737412110a09636861726765" .
            "5f696418012001280912290a06616d6f756e7418022001280b32192e6368" .
            "61726765686976652e6368747970652e416d6f756e7412180a105061796d" .
            "656e744d6574686f64496473180320032809122f0a0b6578706972795f74" .
            "696d6518042001280b321a2e676f6f676c652e70726f746f6275662e5469" .
            "6d657374616d7012320a0b6368617267655f6d65746118052001280b321d" .
            "2e636861726765686976652e6368747970652e4368617267654d65746112" .
            "3b0a106368617267655f6d6574615f7479706518062001280e32212e6368" .
            "61726765686976652e6368747970652e4368617267654d65746154797065" .
            "22270a144368617267654d6f64696679526573706f6e7365120f0a077375" .
            "636365737318012001280822660a134d6574686f64557064617465526571" .
            "75657374120d0a05746f6b656e18012001280912400a167061796d656e74" .
            "5f6d6574686f645f7570646174657318032001280b32202e636861726765" .
            "686976652e6368747970652e5061796d656e744d6574686f6422600a144d" .
            "6574686f64557064617465526573706f6e736512140a0c61636b6e6f776c" .
            "656467656418012001280812320a04696e666f18022001280b32242e6368" .
            "61726765686976652e6368747970652e5061796d656e744d6574686f6449" .
            "6e666f22560a1a537570706f727465644d6574686f645570646174655479" .
            "70657312380a046361726418012001280b322a2e63686172676568697665" .
            "2e6368747970652e5061796d656e744d6574686f64536368656d61436172" .
            "6422350a19436f6e6e656374696f6e56616c696461746552657175657374" .
            "120c0a046b696e64180120012809120a0a02696418022001280922480a18" .
            "436f6e6e656374696f6e436f6e6669726d5265717565737412120a0a7265" .
            "71756573745f696418012001280912180a10766572696669636174696f6e" .
            "5f6b6579180220012809227f0a1a436f6e6e656374696f6e56616c696461" .
            "7465526573706f6e736512120a0a726571756573745f6964180120012809" .
            "12180a10766572696669636174696f6e5f6b657918022001280912330a08" .
            "726573706f6e736518032001280b32212e636861726765686976652e6368" .
            "747970652e526573706f6e736544657461696c22290a19436f6e66696775" .
            "726174696f6e4170706c7952657175657374120c0a046461746118012001" .
            "280c224e0a1a436f6e66696775726174696f6e4170706c79526573706f6e" .
            "7365120f0a0773756363657373180120012808120f0a076d657373616765" .
            "180220012809120e0a06726573756c7418032001280c22360a1a436f6e66" .
            "696775726174696f6e44656c65746552657175657374120c0a046b696e64" .
            "180120012809120a0a026964180220012809223f0a1b436f6e6669677572" .
            "6174696f6e44656c657465526573706f6e7365120f0a0773756363657373" .
            "180120012808120f0a076d657373616765180220012809329e0e0a0a4368" .
            "617267654869766512550a0450696e67121b2e636861726765686976652e" .
            "537472696e675472616e73706f72741a1b2e636861726765686976652e53" .
            "7472696e675472616e73706f7274221382d3e493020d22082f76312f7069" .
            "6e673a012a1287010a12436f6e6e656374696f6e56616c69646174651225" .
            "2e636861726765686976652e436f6e6e656374696f6e56616c6964617465" .
            "526571756573741a262e636861726765686976652e436f6e6e656374696f" .
            "6e56616c6964617465526573706f6e7365222282d3e493021c22172f7631" .
            "2f636f6e6e656374696f6e2f76616c69646174653a012a129c010a1b436f" .
            "6e6e656374696f6e56616c69646174696f6e436f6e6669726d12242e6368" .
            "61726765686976652e436f6e6e656374696f6e436f6e6669726d52657175" .
            "6573741a262e636861726765686976652e436f6e6e656374696f6e56616c" .
            "6964617465526573706f6e7365222f82d3e49302291a242f76312f636f6e" .
            "6e656374696f6e2f76616c69646174652f7b726571756573745f69647d3a" .
            "012a1287010a12436f6e66696775726174696f6e4170706c7912252e6368" .
            "61726765686976652e436f6e66696775726174696f6e4170706c79526571" .
            "756573741a262e636861726765686976652e436f6e66696775726174696f" .
            "6e4170706c79526573706f6e7365222282d3e493021c22172f76312f636f" .
            "6e66696775726174696f6e2f6170706c793a012a128d010a13436f6e6669" .
            "6775726174696f6e44656c65746512262e636861726765686976652e436f" .
            "6e66696775726174696f6e44656c657465526571756573741a272e636861" .
            "726765686976652e436f6e66696775726174696f6e44656c657465526573" .
            "706f6e7365222582d3e493021f2a1d2f76312f636f6e6669677572617469" .
            "6f6e2f7b6b696e647d2f7b69647d12680a0c436861726765437265617465" .
            "121f2e636861726765686976652e43686172676543726561746552657175" .
            "6573741a202e636861726765686976652e43686172676543726561746552" .
            "6573706f6e7365221582d3e493020f220a2f76312f6368617267653a012a" .
            "127b0a0c4368617267654d6f64696679121f2e636861726765686976652e" .
            "4368617267654d6f64696679526571756573741a202e6368617267656869" .
            "76652e4368617267654d6f64696679526573706f6e7365222882d3e49302" .
            "22221d2f76312f6368617267652f7b6368617267655f69647d2f6d6f6469" .
            "66793a012a1287010a0f436861726765417574686f72697a6512222e6368" .
            "61726765686976652e436861726765417574686f72697a65526571756573" .
            "741a232e636861726765686976652e436861726765417574686f72697a65" .
            "526573706f6e7365222b82d3e493022522202f76312f6368617267652f7b" .
            "6368617267655f69647d2f617574686f72697a653a012a127f0a0d436861" .
            "7267654361707475726512202e636861726765686976652e436861726765" .
            "43617074757265526571756573741a212e636861726765686976652e4368" .
            "6172676543617074757265526573706f6e7365222982d3e4930223221e2f" .
            "76312f6368617267652f7b6368617267655f69647d2f636170747572653a" .
            "012a127b0a0c436861726765526566756e64121f2e636861726765686976" .
            "652e436861726765526566756e64526571756573741a202e636861726765" .
            "686976652e436861726765526566756e64526573706f6e7365222882d3e4" .
            "930222221d2f76312f6368617267652f7b6368617267655f69647d2f7265" .
            "66756e643a012a127b0a0c43686172676543616e63656c121f2e63686172" .
            "6765686976652e43686172676543616e63656c526571756573741a202e63" .
            "6861726765686976652e43686172676543616e63656c526573706f6e7365" .
            "222882d3e4930222221d2f76312f6368617267652f7b6368617267655f69" .
            "647d2f63616e63656c3a012a1287010a0f43686172676546726175645363" .
            "616e12222e636861726765686976652e4368617267654672617564536361" .
            "6e526571756573741a232e636861726765686976652e4368617267654672" .
            "6175645363616e526573706f6e7365222b82d3e493022522202f76312f63" .
            "68617267652f7b6368617267655f69647d2f66726175647363616e3a012a" .
            "12700a0c4d6574686f64557064617465121f2e636861726765686976652e" .
            "4d6574686f64557064617465526571756573741a202e6368617267656869" .
            "76652e4d6574686f64557064617465526573706f6e7365221d82d3e49302" .
            "171a122f76312f6d6574686f642f7b746f6b656e7d3a012a128d010a1c4d" .
            "6574686f64417661696c61626c65557064617465536368656d617312182e" .
            "636861726765686976652e456d707479526571756573741a262e63686172" .
            "6765686976652e537570706f727465644d6574686f645570646174655479" .
            "706573222b82d3e493022512232f76312f6d6574686f642f617661696c61" .
            "626c652d7570646174652d736368656d617342f7025a0a63686172676568" .
            "697665ca0213436861726765486976655c4170695c47727063e2021c4368" .
            "61726765486976655c4170695c477270635c4d657461646174619241b202" .
            "12530a0e4368617267654869766520415049223c0a0a4368617267654869" .
            "7665121668747470733a2f2f636861726765686976652e636f6d1a167375" .
            "70706f727440636861726765686976652e636f6d3203312e301a12617069" .
            "2e636861726765686976652e636f6d2a010232106170706c69636174696f" .
            "6e2f6a736f6e3a106170706c69636174696f6e2f6a736f6e5a450a1f0a09" .
            "50726f6a6563744944121208021a0c582d50726f6a6563742d494420020a" .
            "220a0b416363657373546f6b656e121308021a0d417574686f72697a6174" .
            "696f6e200262200a0f0a0b416363657373546f6b656e12000a0d0a095072" .
            "6f6a6563744944120072370a184368617267654869766520446f63756d65" .
            "6e746174696f6e121b68747470733a2f2f636861726765686976652e636f" .
            "6d2f646f6373620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

