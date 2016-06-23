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
public class Usuario {

    private int id;
    private Rol rol;
    private String nick;
    private String nombre;
    private String clave;

    public Usuario(int id, Rol rol, String nick, String nombre, String clave) {
        this.id = id;
        this.rol = rol;
        this.nick = nick;
        this.nombre = nombre;
        this.clave = clave;
    }

    public Usuario(Rol rol, String nick, String nombre, String clave) {
        this.rol = rol;
        this.nick = nick;
        this.nombre = nombre;
        this.clave = clave;
    }

    public Usuario(int id, String nick, String nombre, String clave) {
        this.id = id;
        this.nick = nick;
        this.nombre = nombre;
        this.clave = clave;
    }

    public Usuario(String nick, String nombre, String clave) {
        this.nick = nick;
        this.nombre = nombre;
        this.clave = clave;
    }
    
    public int getId() {
        return id;
    }

    public Rol getRol() {
        return rol;
    }

    public String getNick() {
        return nick;
    }

    public String getNombre() {
        return nombre;
    }

    public String getClave() {
        return clave;
    }
    
    
}
