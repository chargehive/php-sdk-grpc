#!/usr/bin/env bash

rm -rf ./generated
mkdir ./generated

# dependency check
PROTOC_PATH=$(command -v protoc 2>&1)
if [[ "$PROTOC_PATH" == "" ]]; then
  echo "'protoc' tool is required but missing." >&2
  exit 1
fi

PHP_PLUGIN_PATH=$(command -v grpc_php_plugin 2>&1)
if [[ "$PHP_PLUGIN_PATH" == "" ]]; then
  echo "'grpc_php_plugin' tool is required but missing." >&2
  exit 1
fi

echo "Updating local repo..."
git pull --quiet

curl -o api.proto http://api.chargehive.com/api.proto

echo -e "\033[4mCompiling protocol buffers...\033[0m"

sed -i '' -E 's#^import "github.com/gogo/protobuf/gogoproto/gogo.proto";$##g' ./api.proto
sed -i '' -E 's#^option \(gogoproto\..+##g' ./api.proto

$PROTOC_PATH -I . \
  -I $GOPATH/src/github.com/chargehive/proto \
  -I $GOPATH/src/github.com/grpc-ecosystem/grpc-gateway/third_party/googleapis \
  -I $GOPATH/src/github.com/grpc-ecosystem/grpc-gateway \
  -I $GOPATH/src \
  --php_out=generated \
  --grpc_out=generated \
  --plugin=protoc-gen-grpc=$PHP_PLUGIN_PATH \
  ./api.proto
