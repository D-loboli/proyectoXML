/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package org.clienteWebService.model;

/**
 *
 * @author martin
 */
public class Post {
    
    private int id;
    private Usuario idUsuario;
    private String titulo;
    private String texto;
    private String fecha;

    public Post(int id, Usuario idUsuario, String titulo, String texto, String fecha) {
        this.id = id;
        this.idUsuario = idUsuario;
        this.titulo = titulo;
        this.texto = texto;
        this.fecha = fecha;
    }

    public Post(int id, Usuario idUsuario, String titulo, String texto) {
        this.id = id;
        this.idUsuario = idUsuario;
        this.titulo = titulo;
        this.texto = texto;
        this.fecha = Generator.getCurrentDate();
    }

    public Post(Usuario idUsuario, String titulo, String texto, String fecha) {
        this.idUsuario = idUsuario;
        this.titulo = titulo;
        this.texto = texto;
        this.fecha = fecha;
    }

    public Post(Usuario idUsuario, String titulo, String texto) {
        this.idUsuario = idUsuario;
        this.titulo = titulo;
        this.texto = texto;
        this.fecha = Generator.getCurrentDate();
    }

    public int getId() {
        return id;
    }

    public Usuario getIdUsuario() {
        return idUsuario;
    }

    public String getTitulo() {
        return titulo;
    }

    public String getTexto() {
        return texto;
    }

    public String getFecha() {
        return fecha;
    }
    
    
}
