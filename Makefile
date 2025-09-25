openapi-generator-cli:=docker run --rm -v "${PWD}:/local" openapitools/openapi-generator-cli

output:=target/out

generate: clean
	mkdir -p target
	$(openapi-generator-cli) generate  \
		-i /local/openapispec.json \
		-g php \
		-o /local/$(output) \
		--additional-properties variableNamingConvention=camelCase \
		--additional-properties invokerPackage=Pensopay\\Client
	rm -rf lib/*
	mkdir -p lib/Api lib/Model
	mv $(output)/lib/Api lib
	mv $(output)/lib/Model lib
	mv $(output)/lib/*.php lib/

.PHONY: generate

clean:
	rm -rf $(output)
	git checkout lib
	git clean -f -d lib
.PHONY: clean