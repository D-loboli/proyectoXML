/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package org.clienteWebService.net;

import java.io.IOException;
import java.util.LinkedList;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.JPanel;
import javax.xml.parsers.ParserConfigurationException;
import org.clienteWebService.gui.PostGUI;
import org.clienteWebService.model.Post;
import org.xml.sax.SAXException;

/**
 *
 * @author martin
 */
public class HUpdater extends Thread{

    private JPanel panel;
    private int cantPost;
    
    public HUpdater(JPanel panel) throws IOException, ParserConfigurationException, SAXException {
        this.panel = panel;
        cantPost = Linker.getPosts().size();
    }
    
    private void showPosts() throws IOException, ParserConfigurationException, SAXException{
        
        if (Linker.getPosts().isEmpty()) return;

        PostGUI postPublished;
        panel.removeAll();
        
        for (Post post : Linker.getPosts()) {
            postPublished = new PostGUI(post);
            panel.add(postPublished);
            panel.updateUI();
        }
    }

    @Override
    public void run() {

        LinkedList<Post> cache = new LinkedList<>();
        
        while (true) {            
            
            try {
                Thread.sleep(300);
                cache = Linker.getPosts();
                if (cache.size() != cantPost) 
                    cantPost = cache.size();
                
                showPosts();
                
            } catch (InterruptedException | IOException | ParserConfigurationException | SAXException ex) {
                Logger.getLogger(HUpdater.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
    }
    
    
}
