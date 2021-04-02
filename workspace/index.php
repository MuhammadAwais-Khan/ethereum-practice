<?php
declare(strict_types=1);

require("../vendor/autoload.php");
//echo "<pre>";

$eth = new \FurqanSiddiqui\Ethereum\Ethereum();

//print_r($eth);
$eth->networkConfig()->setChainId(3);
$eth->keyPairs();

//infura
$projectId = "a5cd65b0dc904bfcbd04fa63ea176e4c";
$projectSecret = "1c5dcf8cba4a4763a7f6c8a4a0800b1d";
$infura = new \FurqanSiddiqui\Ethereum\RPC\InfuraAPI($eth, $projectId, $projectSecret, "ropsten");

//private key
$key = $eth->keyPairs()->privateKeyFromEntropy(hash("sha256","awais"));
echo "Private Key :".$privateKey = $key->base16()->value();

// public key
echo "<br> Public Key : ".$publicKey = $key->publicKey()->getAccountAddress();

// address
echo "<br> Address : ".$address = $key->publicKey()->getAccount()->getAddress();
