function ScrambleText(options) {
  const {
	selector,
    presets,
    mode,
    glyphs,
    phrases,
    interval,
    play,
    letterize
  } = options;


  const writerOptions = {
    ...GlitchedWriter.presets[presets || 'default'],
    letterize: letterize !== undefined ? letterize : true
  };

  if (mode) writerOptions.mode = mode;
  if (glyphs) writerOptions.glyphs = glyphs;

  glitchedWriter = GlitchedWriter.create(selector, writerOptions);

  glitchedWriter.queueWrite(phrases, interval || 800, play !== undefined ? play : true);
}
