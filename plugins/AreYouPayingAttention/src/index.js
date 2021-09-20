wp.blocks.registerBlockType("ourplugin/are-you-paying-attention", {
  title: "Are You Paying Attention?",
  icon: "smiley",
  category: "common",
  edit: function () {
    return <h1>efwfewfewfwe</h1>;
  },
  save: function () {
    return wp.element.createElement("h1", null, "This is the frontend.");
  },
});
