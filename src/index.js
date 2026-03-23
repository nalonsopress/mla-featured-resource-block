import { registerBlockType } from '@wordpress/blocks';
import {
	useBlockProps,
	RichText,
	InspectorControls
} from '@wordpress/block-editor';
import { PanelBody, TextControl } from '@wordpress/components';
import metadata from './block.json';

import './editor.scss';
import './style.scss';

const Edit = ({ attributes, setAttributes }) => {
	const { title, url, label } = attributes;

	const blockProps = useBlockProps();

	return (
		<>
			<InspectorControls>
				<PanelBody title="Featured Resource Settings">
					<TextControl
						label="Resource URL"
						value={url}
						onChange={(value) => setAttributes({ url: value })}
					/>
					<TextControl
						label="Button Label"
						value={label}
						onChange={(value) => setAttributes({ label: value })}
					/>
				</PanelBody>
			</InspectorControls>

			<div {...blockProps}>
				<RichText
					tagName="h3"
					value={title}
					onChange={(value) => setAttributes({ title: value })}
					placeholder="Add resource title"
				/>
				<p className="mla-featured-resource__url-preview">
					{url || 'Add a URL in block settings'}
				</p>
				<div className="mla-featured-resource__button-preview">
					{label || 'Read more'}
				</div>
			</div>
		</>
	);
};

registerBlockType(metadata.name, {
	edit: Edit,
	save: () => null
});
