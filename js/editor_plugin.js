(function() {
    tinymce.PluginManager.add('custom_mce_button', function(editor, url) {
        editor.addButton('custom_mce_button', {
            //image:'https://cdn2.iconfinder.com/data/icons/circle-icons-1/64/play-256.png',
            image: '/wp-content/plugins/porn-videos-embed/icons/icon.png',
            text: 'PVE',
            onclick: function() {
                editor.windowManager.open({
                    title: 'Insert Porn Videos Embed',
                    body: [{
                        type: 'textbox',
                        name: 'textboxtooltipName',
                        label: 'URL',
                        value: ''
                    }, {
                        type: 'listbox',
                        name: 'className',
                        label: 'Porn Site',
                        values: [{
                            text: 'xvideos',
                            value: 'xvideos'
                        }, {
                            text: 'xhamster',
                            value: 'xhamster'
                        }, {
                            text: 'pornhub',
                            value: 'pornhub'
                        }, {
                            text: 'tnaflix',
                            value: 'tnaflix'
                        },{
                            text: 'tube8',
                            value: 'tube8'
                        },{
                            text: 'gotporn',
                            value: 'gotporn'
                        },{
                            text: 'drtuber',
                            value: 'drtuber'
                        },{
                            text: 'youjizz',
                            value: 'youjizz'
                        },{
                            text: 'sunporno',
                            value: 'sunporno'
                        },
                        {
                           text: 'eporner',
                           value: 'eporner' 
                        },
                        {
                            text:'homemoviestube',
                            value: 'homemoviestube'

                        },
                        {
                            text: 'cliphutner',
                            value: 'cliphunter'

                        }]
                    }, ],

                    onsubmit: function(e) {
                        editor.insertContent(
                            '[' +
                            e.data.className +
                            ' url="' +
                            e.data.textboxtooltipName +
                            '"]' +
                            editor.selection
                            .getContent() +
                            ''
                        );
                    }
                });
            }
        });
    });
})();
