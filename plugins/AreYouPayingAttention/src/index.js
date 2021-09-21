wp.blocks.registerBlockType("ourplugin/are-you-paying-attention", {
  title: "Are You Paying Attention?",
  icon: "smiley",
  category: "common",
  attributes: {
    skyColor: { type: "string" },
    grassColor: { type: "string" },
  },
  edit: function (props) {
    function updateSkyColor(event) {
      props.setAttributes({ skyColor: event.target.value });
    }
    return (
      <div>
        <input type="text" placeholder="sky color" onChange={updateSkyColor} />
        <input type="text" placeholder="grass color" />
      </div>
    );
  },
  save: function () {
    return wp.element.createElement("h1", null, "This is the frontend.");
  },
});
