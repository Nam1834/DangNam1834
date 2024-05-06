using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Gamectrl : SaiMonoBehaviour
{
    private static Gamectrl instance;

    public static Gamectrl Instance { get =>  instance; }

    [SerializeField] protected Camera mainCamera;

    public Camera MainCamera { get => mainCamera;  }

    protected override void Awake()
    {
        base.Awake();
        if (Gamectrl.instance != null) Debug.LogError("Only 1 GameCtrl allow to exist");
        Gamectrl.instance = this;
    }

    protected override void LoadComponents()
    {
        base.LoadComponents();
        this.LoadCamera();
    }

    protected virtual void LoadCamera()
    {
        if (this.mainCamera != null) return;
        this.mainCamera = Gamectrl.FindObjectOfType<Camera>();
        Debug.Log(transform.name + ": LoadCamera", gameObject);
    }
}
