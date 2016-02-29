<%@ Page
    Language="C#"
    MasterPageFile="~/GaiaTestMasterPage.master"
    AutoEventWireup="true"
    CodeFile="LiveScroll.aspx.cs"
    Inherits="LiveScroll"
    Title="Live Scroll Demo" %>

<%@ Register 
    Assembly="Gaia.WebWidgets" 
    Namespace="Gaia.WebWidgets" 
    TagPrefix="gaia" %>

<%@ Register 
    Assembly="Gaia.WebWidgets.Extensions" 
    Namespace="Gaia.WebWidgets.Extensions" 
    TagPrefix="ext" %>

<asp:Content
    ID="Content1"
    ContentPlaceHolderID="ContentPlaceHolder1"
    runat="Server">

    <h1>Ajax Live Scrolling Example</h1>
    <p>This is an example of <em>Live Scrolling with Ajax</em>. Live Scrolling means that when you scroll to the bottom
    of the container then new items are being appended to the container automatically. It is a very nice way of having a "DataGrid"
    run on into "infinity" or with very large sets of data. This way the user can get presented only the most relevant at the beginning
    and have the choice of drilling into the dataset to see the next chunk of data as long as he wish. It is a very nice way to create 
    a pager for a "DataGrid" or a "GridView" too.</p>
    <p>A couple of good examples of usage is to display search results where you only show the first 10 results
    and feeds your result widget with more results as the user scrolls down</p>
    <p>Try to scroll down to the bottom of the list.</p>

    <gaia:Panel
        ID="panel"
        Style="border: solid 1px black;width:550px;height:300px;position:relative;float:left;overflow-y:auto;"
        runat="server" />
    <gaia:Image 
        runat="server" 
        ID="updateProgressControl" 
        style="float:left;margin-left:15px;"
        ImageUrl="media/ajax-loader.gif" 
        AlternateText="Please wait..." />

    <gaia:Window 
        ID="bioWindow" 
        runat="server" 
        Caption="Biography" 
        Draggable="true" 
        Resizable="true" 
        Minimizable="false" 
        Maximizable="false" 
        Closable="true"
        Height="450px" 
        Width="600px" 
        WidthOfBorders="12" 
        HeightOfBorders="28" 
        Visible="false"
        CssClass='light_blue'>
        <gaia:Label runat="server" ID="bioLbl" />
    </gaia:Window>

</asp:Content>
