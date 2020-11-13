<template>
  <div class="container-fluid Themes2 justify-content-center">
   <div class="row card  0-padding">
      <div class="col-12">
         <div class="card-header toolbar-bg-color toolbar-size">
           <!--edit toolbars-->
         <editor-menu-bar :editor="editor" v-slot="{ commands, isActive }">
           <ul class="nav">

               <!--Bold Style-->
             <li class="nav-item m-1">
              <button class="bg-primary text-white" :class="{ 'is-active': isActive.bold() }" @click="commands.bold"> <i class="fa fa-bold" aria-hidden="true"></i> Bold</button>
             </li>

               <!--Heading styles-->
             <li class="nav-item m-1">
              <button class="bg-primary text-white" @click="collapseMenu('#headings')" > <i class="fas fa-heading    "></i> Headings</button>
               <!--Heading Collapse Menu-->
               <ul id="headings" class="nav flex-column collapse">
                   <!--H1-->
                  <li class="nav-item">
                    <button class="bg-primary text-white" :class="{ 'is-active': isActive.heading({ level: 1 }) }" @click="commands.heading({ level: 1 })">H1</button>
                  </li>
                  <!--H2-->
                  <li class="nav-item">
                   <button class="bg-primary text-white" :class="{ 'is-active': isActive.heading({ level: 2 }) }" @click="commands.heading({ level: 2 })">H2</button>
                  </li>
                  <!--H3-->
                  <li class="nav-item">
                    <button class="bg-primary text-white" :class="{ 'is-active': isActive.heading({ level: 3 }) }" @click="commands.heading({ level: 3 })">H3</button>
                  </li>
               </ul>
             </li>
             <!--lists-->
             <li class="nav-item m-1">
               <button class="bg-primary text-white" @click="collapseMenu('#lists')" > <i class="fa fa-list" aria-hidden="true"></i> Lists</button>
               <!--List collapse Menu-->
               <ul id="lists" class="nav flex-column collapse">
                   <!--Ordinary List-->
                  <li class="nav-item">
                    <!--<button class="bg-primary text-white" :class="{ 'is-active': isActive.ListItem() }" @click="commands.ListItem()">Ordinary List</button>-->
                  </li>
                  <!--Orderlist-->
                  <li class="nav-item">
                    <!--<button class="bg-primary text-white" :class="{ 'is-active': isActive.OrderedList() }" @click="commands.OrderedList()">Orderred List</button>--->
                  </li>
                  <!--Bullet List-->
                  <li class="nav-item">
                    <!--<button class="bg-primary text-white" :class="{ 'is-active': isActive.BulletList() }" @click="commands.BulletList()">Bullet List</button>-->
                  </li>
               </ul>
             </li>

             <!--Italic-->
             <li class="nav-item m-1">
               <button class="bg-primary text-white" :class="{ 'is-active': isActive.italic() }" @click="commands.italic()"> <i class="fa fa-italic" aria-hidden="true"></i> Italic </button>
             </li>

             <!--Paragraph-->
             <li class="nav-item m-1">
               <button class="bg-primary text-white" :class="{ 'is-active': isActive.italic() }" @click="commands.italic()"> <i class="fa fa-paragraph" aria-hidden="true"></i> Paragraph </button>
             </li>

             <!--underline-->
             <li class="nav-item m-1">
               <button class="bg-primary text-white" :class="{ 'is-active': isActive.underline() }" @click="commands.underline()"> <i class="fa fa-underline" aria-hidden="true"></i>Underline </button>
             </li>

             <!--strike-->
             <li class="nav-item m-1">
               <button class="bg-primary text-white" :class="{ 'is-active': isActive.strike() }" @click="commands.strike()"> <i class="fa fa-strikethrough" aria-hidden="true"></i> strike </button>
             </li>
           </ul>
         </editor-menu-bar>
                  <editor-menu-bar :editor="editor" v-slot="{ commands, isActive }">
           <ul class="nav">
             <li class="nav-item">
              <button :class="{ 'is-active': isActive.bold() }" @click="commands.bold">Bold</button>
             </li>  
             <li class="nav-item">
               <a class="nav-link" href="#">Link</a>
             </li>
           </ul>
         </editor-menu-bar>
         </div>
         <!--editor Body-->
         <div class="card-body text-window-color">
            <editor-content id="editor"  class="editor bg-white Ta-hieght   col-sm-12" :editor="editor" />                                                                          
         </div> 
         <!--editor Footer-->
         <div class="card-footer text-center bg-primary">
            <div class="row">
             <div class="col">
                 <p class="text-white">editting....</p>
             </div>
             <div class="col">
                 <button @click="saveData()" class="btn btn-success text-white">Save</button>
             </div> 
             <div class="col">
                 <button  class="btn btn-danger text-white">Save Change</button>
             </div>
             <div class="#editor" ></div> 
            </div> 
         </div>
      </div>           
   </div> 
  </div>
</template>


<script>
import { Editor, EditorContent, EditorMenuBar } from 'tiptap'
import {
  Blockquote,
  CodeBlock,
  HardBreak,
  Heading,
  OrderedList,
  BulletList,
  ListItem,
  TodoItem,
  TodoList,
  Bold,
  Code,
  Italic,
  Link,
  Strike,
  Underline,
  History,
} from 'tiptap-extensions'

export default {
  components: {
    EditorMenuBar,
    EditorContent,
  },
  data() {
    return {
      editor: new Editor({
        extensions: [
          new Blockquote(),
          new CodeBlock(),
          new HardBreak(),
          new Heading({ levels: [1, 2, 3] }),
          new BulletList(),
          new OrderedList(),
          new ListItem(),
          new TodoItem(),
          new TodoList(),
          new Bold(),
          new Code(),
          new Italic(),
          new Link(),
          new Strike(),
          new Underline(),
          new History(),
        ],
        content: ''
      }),
    }
  },
  beforeDestroy() {
    this.editor.destroy()
  },
  methods: {
    /**
     * Fetch Product about
     * and pass to editor 
     * for editting
    */
      fetchAbout(){
         axios.get('/showproductdata/' + Number(localStorage.currentProductId))
         .then((data)=>{
            alert('Data was fetched successfully in the database');
            console.log(data);
            this.editor.setContent('<p>Fuck you</p>',true,null);
         })
         .catch(()=>{
            alert('There was an error fetching Data from the database')
         })
      },
    /**
     * Store The Html data
     * to database
    */
      saveData(){
         const data = {
           id: Number(localStorage.currentProductId),
           about: this.editor.getHTML()
         }
          
         axios.post('/saveproductabout/' + data.id,data)
         .then(()=>{
            alert('Data was saved successfully in the database');
         })
         .catch(()=>{
            alert('There was an error Saving Data to the database')
         })
      },
      /**
       * Collapse Menu
       * Trigger
      */
     collapseMenu(id){
         $(id).collapse('toggle');
     },
      returnData(){
          alert(this.content)
          console.log(this.content)
      },
  },
  mounted() {
      //alert(this.editor.getHTML())
      this.fetchAbout();
  },
}
</script>

<style>


.editor
    {
	border:solid 1px #ccc;
	padding: 20px;
    min-height: 60vh;
    }

#Toolbars{
    position: fixed;
    z-index: 1;
}
/**Toolbar Color*/
.toolbar-bg-color{
  background-color: rgb(204, 65, 88);
}

.text-window-color{
    background-color: rgb(12, 12, 22);
}
/**Toolbar Size*/
.toolbar-size{
    min-height: 20vh;
}

</style>