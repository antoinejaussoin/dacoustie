TARGET_ARCHS?=linux/amd64,linux/arm64

publish:
	docker build . -t antoinejaussoin/dacoustie:alpha
	docker push antoinejaussoin/dacoustie:alpha

publish-multiarch:
	docker buildx build --platform ${TARGET_ARCHS} -f ./Dockerfile -t antoinejaussoin/dacoustie:alpha .