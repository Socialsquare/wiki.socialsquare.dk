all: clean submodule-update dist

clean:
	rm -rf ./dist

submodule-update:
	git submodule update --init

dist: dist-make-dir dist-mediawiki dist-specialization

dist-make-dir:
	mkdir ./dist

dist-mediawiki:
	cp -r ./mediawiki/* ./dist

dist-specialization:
	cp -r ./specialization/* ./dist

