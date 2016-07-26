CREATE TABLE account(
	accountId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	accountEmail VARCHAR(128) NOT NULL,
	accountHash CHAR(128),
	accountSalt CHAR(64),
	accountUsername VARCHAR(32) NOT NULL,
	UNIQUE(accountEmail),
	UNIQUE(accountUsername),
	PRIMARY KEY(accountId)
);

CREATE TABLE series(
	seriesId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	seriesName VARCHAR(128) NOT NULL,
	PRIMARY KEY(seriesId)
);

CREATE TABLE episode(
	episodeId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	episodeFilePath VARCHAR(128),
	episodeName VARCHAR(128) NOT NULL,
	episodeSeriesId INT UNSIGNED NOT NULL,
	INDEX(episodeSeriesId),
	FOREIGN KEY(episodeSeriesId) REFERENCES series(seriesId),
	PRIMARY KEY (episodeId)
);

CREATE TABLE watch(
	watchAccountId INT UNSIGNED NOT NULL,
	watchEpisodeId INT UNSIGNED NOT NULL,
	INDEX(watchAccountId),
	INDEX(watchEpisodeId),
	FOREIGN KEY(watchAccountId) REFERENCES account(accountId),
	FOREIGN KEY(watchEpisodeId) REFERENCES episode(episodeId),
	PRIMARY KEY(watchAccountId, watchEpisodeId)
);