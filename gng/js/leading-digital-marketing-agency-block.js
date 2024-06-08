let register_block_type = wp.blocks.registerBlockType;
let RichText = wp.editor.RichText;

register_block_type('gng/leading-digital-marketing-agency-block', {
    title: 'Leading Digital Marketing Agency',
    icon: 'admin-settings',
    category: 'widgets',
    attributes: {
        content: {
            type: 'string',
            source: 'html',
            selector: 'p',
        },
    },
    edit: function(props) {
        let content = props.attributes.content;

        function onChangeContent(newContent) {
            props.setAttributes({ content: newContent });
        }

        return wp.element.createElement(
            'div',
            { className: 'leading-digital-marketing-agency-block' },
            wp.element.createElement(RichText, {
                tagName: 'p',
                value: content,
                onChange: onChangeContent,
                placeholder: 'Enter content...',
            })
        );
    },
    save: function(props) {
        return wp.element.createElement(
            'div',
            { className: 'px-8 md:px-20 lg:px-[23rem] text-center' },
            wp.element.createElement(RichText.Content, {
                tagName: 'p',
                value: props.attributes.content,
                className: 'text-4xl md:text-6xl lg:text-[3rem] text-black',
            })
        );
    },
});
