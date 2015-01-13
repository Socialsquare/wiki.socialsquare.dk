all: clean submodule-update dist

clean:
	rm -rf ./dist

submodule-update:
	git submodule update

dist:
	cp -r ./mediawiki ./dist
