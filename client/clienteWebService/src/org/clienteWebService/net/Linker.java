/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package org.clienteWebService.net;

import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.File;
import java.io.IOException;
import java.net.URL;
import java.util.ArrayList;
import java.util.LinkedList;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.xml.parsers.ParserConfigurationException;
import org.clienteWebService.model.Post;
import org.jespxml.JespXML;
import org.jespxml.excepciones.TagHijoNotFoundException;
import org.jespxml.modelo.Tag;
import org.xml.sax.SAXException;

/**
 *
 * @author martin
 */
public class Linker {

    // Cambiar localhost por ip del servidor
    private static final String DEFAULT_PATH = "http://10.52.7.1/grupo_b/server/model/";
    private static File tempFile;
    private static BufferedWriter fileEditor;
    private static BufferedReader urlLector;
    
    public static JespXML addPost(Post newPost) throws IOException{
        
        return new JespXML(new URL
        (DEFAULT_PATH + "postear.php?nick=" + newPost.getIdUsuario().getNick() + "&titulo=" + 
                newPost.getTitulo() + "&texto=" + newPost.getTexto() + "&fecha=" + newPost.getFecha()));
    }
    
    public static JespXML isLoginValido(String nick, String password) throws IOException{

//        tempFile = new File("login.xml");
//        if(!tempFile.exists()) tempFile.createNewFile();
//        fileEditor = new BufferedWriter(new FileWriter(tempFile));
//        urlLector = new BufferedReader(new InputStreamReader(new URL("").openStream()));
//        
//        
//        
//        tempFile.delete();
        return new JespXML(new URL(DEFAULT_PATH + "login.php?nick=" + nick + "&password=" + password));
    }
    
    public static JespXML registerUser(String nick, String name, String clave) throws IOException{
        
        return new JespXML(new URL
        (DEFAULT_PATH + "registrar.php?nick=" + nick + "&name=" + name + "&clave=" + clave));
    }

    public static JespXML qualifyPost(int idPost, byte calificacion) throws IOException{
        
        return new JespXML(new URL
        (DEFAULT_PATH + "calificar.php?idPost=" + idPost + "&calificacion=" + calificacion));
    }
    
    public static JespXML deletePost(String nick, String clave, int idPost) throws IOException{
        
        return new JespXML(new URL
        (DEFAULT_PATH + "eliminar.php?nick=" + nick + "&clave=" + clave + "&idPost=" + idPost));
    }
    
    public static JespXML listPosts() throws IOException{
        
        return new JespXML(new URL(DEFAULT_PATH + "listar.php"));
    }
    
    public static LinkedList<Post> getPosts() throws IOException, ParserConfigurationException, SAXException{
        
        LinkedList<Post> posts = new LinkedList<>();
        JespXML filePosts = listPosts();
        Tag root = filePosts.leerXML();
        
        if (root.isHijos()) return posts;
        
        ArrayList<Tag> tagHijoByName = (ArrayList<Tag>) root.getTagHijoByName("posteo", Tag.Cantidad.TODOS_LOS_TAGS);
        Post p;
        String usuario, titulo, texto, fecha;
        
        for (Tag tag : tagHijoByName) {
             try {
                usuario = tag.getTagHijoByName("usuario").getContenido();
                titulo = tag.getTagHijoByName("titulo").getContenido();
                texto = tag.getTagHijoByName("texto").getContenido();
                fecha = tag.getTagHijoByName("fecha").getContenido();
                
                p = new Post(usuario, titulo, texto, fecha);
                posts.add(p);
            } catch (TagHijoNotFoundException ex) {
                Logger.getLogger(Linker.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
        
        return posts;
    }
}
