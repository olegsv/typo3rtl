# Enable RTL and LTR keys

RTE.default.showButtons := addToList(lefttoright) 
RTE.default.showButtons := addToList(righttoleft) 
RTE.default.showButtons := addToList(language) 
RTE.default.buttons.lefttoright.setActiveOnRteOpen = 1
RTE.default.buttons.righttoleft.setActiveOnRteOpen = 1
RTE.default.buttons.language.setActiveOnRteOpen = 1

RTE.default {
	contentCSS = typo3conf/ext/typo3rtl/Resources/Public/Css/Backend/rteext.css

#	// Allow only buttons which are listed in property "toolbarOrder"
#	showButtons (
#		formatblock, blockstyle, textstyle, bold, italic, strikethrough, big, small, subscript, superscript,
#		orderedlist, unorderedlist, left, center, right, justifyfull, copy, cut, paste,
#		undo, redo, removeformat, link, unlink,	line, insertparagraphbefore, insertparagraphafter,
#                lefttoright, righttoleft, language,
#		chMode, table, tableproperties, toggleborders, tablerestyle,
#		rowproperties, rowinsertabove, rowinsertunder, rowdelete, rowsplit,
#		columnproperties, columninsertbefore, columninsertafter, columndelete, columnsplit,
#		cellproperties, cellinsertbefore, cellinsertafter, celldelete, cellsplit, cellmerge
#	)
#	// Define buttons and order of button that will be shown
}

RTE.default.FE < RTE.default



